<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use \CodeIgniter\Config\Services;
use App\Models\UsuarioModel;

class Usuario extends Controller {
    private $model;
    private $sessao;

    public function __construct() {
        $this->sessao = session();
        $this->model = new UsuarioModel();
    }

    public function index() {
        helper('form');
        $error = '';
        $data = array();
        $request = Services::request();
        $data['title'] = 'Login';

        echo view('templates/header', $data);
        echo view('usuario/login');
        echo view('templates/footer');


    }

    public function listarUsuarios() {
        $data = [
            'title' => 'Usuários'
        ];



        echo view('templates/header', $data);
        echo view('usuario/usuarios');
        echo view('templates/footer');
    }


    public function criarUsuario() {
        helper('form');
        $data = [
            'title' => 'Novo usuário'
        ];


        echo view('templates/header', $data);
        echo view('usuario/novousuario');
        echo view('templates/footer');;

    }

    public function login() {
        if ($this->checkSession()) {
            echo view('templates/header', $data = ['title' => 'Bem vindo']);
            echo 'Bem vindo ' . $_SESSION['nome'] . '<br><br>';
            echo anchor(base_url('noticias'), '<< Área restrita');
            echo view('templates/footer');
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
                $params = $result['id'];
                $this->model->db->query('UPDATE users SET last_login = NOW() WHERE id = ?', $params);//atualiza o ultimo login
                $this->setSession($result);//carrega os dados do usuário pra sessão
                return redirect()->to(base_url('noticias'));
            } else {
                $error = 'Login inválido';
            }
        }
        if ($error != '') {//ao fim checa se houve erro
            $data['error'] = $error;
        }
        echo view('templates/header', $data);
        echo view('usuario/login');
        echo view('templates/footer');


    }

    public function getUsuario($username = null, $password = null) {
        $results = $this->model->getUser($username, $password);
        if (!$results) {
            return false;
        }
        return $results;
    }

    private function setSession($data = null) {
        $sessionData = [
            'id' => $data['id'],
            'nome' => $data['name']
        ];
        $this->sessao->set($sessionData);
    }

    public function checkSession() {
        return $this->sessao->has('id');
    }

    public function logout() {
        $this->controlaAcesso();
        $this->sessao->destroy();
        return redirect()->to(base_url('usuario/login'));
    }

    public function controlaAcesso() {
        if (!$this->checkSession()) {
            $this->login();
            return;
        }
    }

}

