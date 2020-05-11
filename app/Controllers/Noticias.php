<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Noticias extends Controller {

    private $obj_usuario;
    private $sessao;
    private $usuarioModel;
    protected $noticiasModel;

    public function __construct() {
        helper('form');
        $this->obj_usuario = new Usuario();
        $this->usuarioModel = new UsuarioModel();
        $this->noticiasModel = new NoticiasModel();
        $this->sessao = \Config\Services::session();
    }

    public function index() {
        if (!$this->obj_usuario->checkSession()) {
            $this->obj_usuario->login();
            return;
        }
        $data = [

            'news' => $this->noticiasModel->get()->paginate(5),
            'title' => 'Notícias arquivadas',
            'pager' => $this->noticiasModel->pager
        ];
        //echo view('templates/header', $data);
        echo view('templates/d_header', $data);
        echo view('pages/overview');
        echo view('templates/d_footer');
        //echo view('templates/footer');
    }

    public function ver($slug = null) {

        $data = [
            'news' => $this->noticiasModel->getNews($slug)
        ];

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];
        echo view('templates/header', $data);
        echo view('noticias/ver', $data);
        echo view('templates/footer');
    }

    public function buscar() {
        $valor = $this->request->getVar('valor');
        if (!$valor) {
            redirect($this->index());
        } else {
            $data = [
                'news' => $this->noticiasModel->buscar($valor, 5),
                'title' => 'Resultados encontrados',
                'pager' => $this->noticiasModel->pager
            ];
            echo view('templates/d_header', $data);
            echo view('pages/overview', $data);
            echo view('templates/d_footer');
        }
    }

    public function criar() {
        if (!$this->obj_usuario->checkSession()) {
            $this->sessao->login();
            return;
        }
        echo view('templates/d_header', $data = ['title' => 'Criar notícia']);
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'
        ])) {
            echo view('noticias/criar');
        } else {
            date_default_timezone_set('America/Sao_Paulo');
            $data = [
                'id' => $this->request->getVar('id'),
                'title' => $this->request->getVar('title'),
                'slug' => url_title($this->slugify($this->request->getVar('title')), "-", false),
                'body' => $this->request->getVar('body'),
                'data' => date('Y-m-d H:i:s')
            ];
            //dd($data);
            $this->noticiasModel->store($data);
            if ($data['id']) {
                echo view('noticias/success', $data = ['acao' => 'editada',
                    'title' => 'Sucesso']);
            } else {
                $this->noticiasModel->db->query('UPDATE news SET data = NOW() WHERE slug = ?', $data['slug']);
                echo view('noticias/success', $data = ['acao' => 'criada']);
            }
        }
        echo view('templates/d_footer');

    }

    public function editar($id = null) {
        if (!$this->obj_usuario->checkSession()) {
            $this->obj_usuario->login();
            return;
        }
        $new = $this->noticiasModel->find($id);
        echo view('templates/d_header', $new = [
            'new' => $new,
            'title' => 'Editar Notícia'
        ]);
        echo view('noticias/criar');
        echo view('templates/d_footer');
    }


    public function excluir($id = null) {
        if (!$this->obj_usuario->checkSession()) {
            $this->obj_usuario->login();
            return;
        }
        if ($this->noticiasModel->apagar($id)) {
            echo view('templates/d_header', $data = ['title' => 'Sucesso']);
            echo view('noticias/delete/sucesso_exclusao');
        } else {
            echo view('templates/d_header', $data = ['title' => 'Falhou']);
            echo view('noticias/delete/erro_exclusao');
        }
        echo view('templates/d_footer');
    }


    function slugify($string) {
        $string = preg_replace('/[\t\n]/', ' ', $string);
        $string = preg_replace('/\s{2,}/', ' ', $string);
        $list = array(
            'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z',
            'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c', 'À' => 'A', 'Á' => 'A',
            'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C',
            'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I',
            'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U',
            'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a',
            'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i',
            'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
            'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u',
            'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'Ŕ' => 'R',
            'ŕ' => 'r', '/' => '-', ' ' => '-', '.' => '-',);
        $string = strtr($string, $list);
        $string = preg_replace('/-{2,}/', '-', $string);
        $string = strtolower($string);
        return $string;
    }

    private function controlaAcesso() {
        if (!$this->obj_usuario->checkSession()) {
            $this->obj_usuario->login();
            return;
        }

    }
}
