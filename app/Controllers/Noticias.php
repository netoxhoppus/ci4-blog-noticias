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
        helper('session');
        date_default_timezone_set('America/Sao_Paulo');
        $this->obj_usuario = new Usuario();
        $this->usuarioModel = new UsuarioModel();
        $this->noticiasModel = new NoticiasModel();
        $this->sessao = session();
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
        echo view('templates/d_header', $data);
        echo view('pages/overview');
        echo view('templates/d_footer');
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
        echo view('noticias/ver');
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
            $this->obj_usuario->login();
            return;
        }
        $data = [
            'title' => 'Notícia'
        ];
        echo view('templates/d_header', $data);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_news' => $this->request->getVar('id_news'),
                'title' => $this->request->getVar('title'),
                'subtitle' => $this->request->getVar('subtitle'),
                'slug' => url_title($this->slugify($this->request->getVar('title')), "-", false),
                'body' => $this->request->getVar('body'),
                'id_autor' => $_SESSION['id_user']
            ];

            $img = new Imagem();
            if (!$this->noticiasModel->store($data)) {//se falhou

                $data = [
                    'errors' => $this->noticiasModel->errors()
                ];
                $this->sessao->setFlashdata($data);
                return redirect()->back()->withInput();

            } else if ($data['id_news']) {//edição da noticia
                if (!empty($_FILES['capa']['name'])) {//enviou
                    $imagem = $img->uploadImg('/imgs/noticias/capa/', 'capa');
                    $caminho = $this->noticiasModel->db->query('SELECT img_capa FROM noticia WHERE id_news = ?', $data['id_news'])->getResult('array')[0]['img_capa'];

                    if ($caminho != '/imgs/noticias/capa/default/default.png'){//pra nao apagar a imagem default
                        unlink($_SERVER['DOCUMENT_ROOT'] . $this->noticiasModel->db->query('SELECT img_capa FROM noticia WHERE id_news = ?', $data['id_news']
                            )->getResult('array')[0]['img_capa']);//apaga a imagem antiga
                    }

                    $this->noticiasModel->db->query('UPDATE noticia SET img_capa = ? WHERE id_news = ?', [$imagem, $data['id_news']]);//atualiza pra nova
                }
                echo view('noticias/success', $data = ['acao' => 'Notícia editada']);
            } else {//criaçao da noticia
                if (empty($_FILES['capa']['name'])) {//nao enviou
                    $imagem = '/imgs/noticias/capa/default/default.png'; //define a imagem default
                } else {
                    $imagem = $img->uploadImg('/imgs/noticias/capa/', 'capa');
                }
                $this->noticiasModel->db->query('UPDATE noticia SET img_capa = ? WHERE slug = ?', [$imagem, $data['slug']]);/* atuliza a imagem*/
                $this->noticiasModel->db->query('UPDATE noticia SET data_criacao = ? WHERE slug = ?', [date('Y-m-d H:i:s'), $data['slug']]);/* atuliza a data*/
                echo view('noticias/success', $data = ['acao' => 'Notícia criada']);
            }
            echo view('templates/d_footer');
            return;
        }
        echo view('noticias/criar', $data);
        echo view('templates/d_footer');
    }

    public function getAutor($id_autor = null) {
        return $this->noticiasModel->getAutor($id_autor);
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
