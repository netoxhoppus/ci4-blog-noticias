<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use CodeIgniter\Controller;


class Noticias extends Controller {

    protected $model;
    protected $sessao;

    public function __construct() {
        helper('form');
        $this->model = new NoticiasModel();
        $this->sessao = new Usuario();

    }

    public function index() {

        if (!$this->sessao->checkSession()) {
            $this->sessao->login();
            return;
        }
        $data = [
            'news' => $this->model->getNews(),
            'title' => 'Notícias arquivadas',
            'pager' => $this->model->pager
        ];
        //echo view('templates/header', $data);
        echo view('templates/d_header', $data);
        echo view('pages/overview');
        echo view('templates/d_footer');
        //echo view('templates/footer');
    }

    public function ver($slug = null) {

        $data = [
            'news' => $this->model->getNews($slug)
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
                'news' => $this->model->buscar($valor),
                'title' => 'Resultados encontrados',
                'pager' => $this->model->pager
            ];
            echo view('templates/d_header', $data);
            echo view('pages/overview', $data);
            echo view('templates/d_footer');
        }
    }

    public function criar() {
        if (!$this->sessao->checkSession()) {
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
            $data = [
                'id' => $this->request->getVar('id'),
                'title' => $this->request->getVar('title'),
                'slug' => url_title($this->slugify($this->request->getVar('title')), "-", false),
                'body' => $this->request->getVar('body')
            ];
            $this->model->store($data);
            if ($data['id']) {
                echo view('noticias/success', $data = ['acao' => 'editada',
                    'title' => 'Sucesso']);
            } else {
                echo view('noticias/success', $data = ['acao' => 'criada']);
            }
        }
        echo view('templates/d_footer');

    }

    public function editar($id = null) {
        if (!$this->sessao->checkSession()) {
            $this->sessao->login();
            return;
        }
        $new = $this->model->find($id);
        echo view('templates/d_header', $new = [
            'new' => $new,
            'title' => 'Editar Notícia'
        ]);
        echo view('noticias/criar');
        echo view('templates/d_footer');
    }


    public function excluir($id = null) {
        if (!$this->sessao->checkSession()) {
            $this->sessao->login();
            return;
        }
        if ($this->model->apagar($id)) {
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

    private
    function controlaAcesso() {
        if (!$this->sessao->checkSession()) {
            $this->sessao->login();
            return;
        }

    }
}
