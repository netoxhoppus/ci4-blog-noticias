<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\CodeIgniter;
use \CodeIgniter\Config\Services;
use CodeIgniter\Controller;

class Usuario extends Controller {

    private $sessao;
    private $usuarioModel;
    public $request;

    //private $allowedFields = [];

    public function __construct() {
        $this->sessao = session();
        $this->usuarioModel = new UsuarioModel();
        $this->request = Services::request();
    }

    //--------------------------------------------------------------------

    public function index() {
        helper('form');
        $error = '';
        $data = array();
        //$request = Services::request();
        $data['title'] = 'Login';

        //echo view('templates/header', $data);
        //echo view('usuario/login');
    }

    //--------------------------------------------------------------------

    public function listarUsuarios() {
        $data = [
            'title' => 'Usuários'
        ];

        echo view('templates/d_header', $data);
        echo view('usuario/usuarios');
        echo view('templates/d_footer');
    }

    //--------------------------------------------------------------------


    public function criarUsuario() {
        helper('form');
        $data = [
            'title' => 'Novo usuário'
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $img = new Imagem();
            $data = [
                'id_user' => null,
                'username' => $this->request->getVar('username'),
                'password' => MD5(SHA1($this->request->getVar('password'))),
                'email' => $this->request->getVar('email'),
                'nome' => $this->request->getVar('nome'),
                'avatar' => $img->uploadImg('/imgs/users/avatar/', 'avatar'),
                'sobre' => $this->request->getVar('sobre'),
                'id_perfil' => $this->request->getVar('perfil'),
            ];
            if ($this->usuarioModel->store($data)) {
                echo 'SALVOU';
            } else {
                echo 'NÃO SALVOU';
            }
        }
        echo view('templates/d_header', $data);
        echo view('usuario/novousuario');
        echo view('templates/d_footer', $data);
    }

    //--------------------------------------------------------------------

    public function getPerfis() {
        return $this->usuarioModel->getAllPerfis();
    }

    //--------------------------------------------------------------------

    public
    function login() {
        if ($this->checkSession()) {
            echo view('templates/d_header', $data = ['title' => 'Bem vindo']);
            echo 'Bem vindo ' . $_SESSION['nome'] . '<br><br>';

            echo anchor(base_url('noticias'), '<< Área de notícias');
            echo view('templates/d_footer');
            return;
        }

        helper('form');
        $error = '';
        $data = array();
        $request = Services::request();
        $data['title'] = 'Login';

        //======================checa se foi submetido um POST=====================
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $request->getPost('usuario');
            $password = $request->getPost('senha');

            //====================verifica campos e busca usuário==================
            if ($username == '' || $password == '') {
                $error = 'Erro no preenchimento dos campos.';
            } else if (is_array($result = $this->getUsuario($username, md5(sha1($password))))) {
                // login válido
                $params = $result['id_user'];
                $this->usuarioModel->db->query('UPDATE user SET last_login = NOW() WHERE id_user = ?', $params);//atualiza o ultimo login
                $this->setSession($result);//carrega os dados do usuário pra sessão
                return redirect()->back();
            } else {
                $error = 'Login inválido';
            }
        }
        if ($error != '') {//ao fim checa se houve erro
            $data['error'] = $error;
        }
        // dd($error);
        echo view('templates/login_header', $data);
        echo view('usuario/login');
        echo view('templates/login_footer');


    }

    //--------------------------------------------------------------------

    public function getUsuario($username = null, $password = null) {
        $results = $this->usuarioModel->getUser($username, $password);
        if (!$results) {
            return false;
        }
        return $results;
    }

    //--------------------------------------------------------------------

    private
    function setSession($data = null) {
        $sessionData = [
            'id_user' => $data['id_user'],
            'nome' => $data['nome'],
            'avatar' => $data['avatar']
        ];

        $this->sessao->set($sessionData);
    }

    //--------------------------------------------------------------------

    public
    function checkSession() {
        return $this->sessao->has('id_user');
    }

    //--------------------------------------------------------------------

    public
    function logout() {
        $this->controlaAcesso();
        $this->sessao->destroy();
        return redirect()->to(base_url('home'));
    }

    //--------------------------------------------------------------------

    public
    function controlaAcesso() {
        if (!$this->checkSession()) {
            $this->login();
            return;
        }
    }

    //--------------------------------------------------------------------

}

