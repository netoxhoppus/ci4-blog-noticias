<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use \CodeIgniter\Config\Services;
use CodeIgniter\Controller;

class Usuario extends Controller {

    private $sessao;
    private $usuarioModel;
    public $request;

    //private $allowedFields = [];

    public function __construct() {
        $this->sessao = session();
        helper('form');
        $this->usuarioModel = new UsuarioModel();
        $this->request = Services::request();
    }

    //--------------------------------------------------------------------
    public function index() {

    }

    //--------------------------------------------------------------------
    public function profile() {
        $data = [
            'title' => 'Meu perfil'
        ];

        echo view('templates/d_header', $data);
        echo view('usuario/profile');
        echo view('templates/d_footer');
    }
    //--------------------------------------------------------------------


    //--------------------------------------------------------------------
    public function listarUsuarios() {
        if (!$this->checkSession()) {
            $this->login();
            return;
        } elseif (!$this->ehAdmin()) {
            echo view('templates/d_header', $data = ['title' => 'Acesso negado']);
            echo view('usuario/acessoproibido');
            echo view('templates/d_footer');
            return;
        }
        $data = [
            'title' => 'Usuários'
        ];

        echo view('templates/d_header', $data);
        echo view('usuario/usuarios');
        echo view('templates/d_footer');
    }
    //--------------------------------------------------------------------

    //--------------------------------------------------------------------
    public function ehAdmin() {//retorna true se for admin
        return $this->getTipoDoPerfil($_SESSION['id_perfil'])[0]['tipo'] == 'Administrador';
    }
    //--------------------------------------------------------------------

    //--------------------------------------------------------------------
    public function editar($id = null) {
        if (!$this->checkSession()) {
            $this->login();
            return;
        }
        $usu = $this->usuarioModel->find($id);

        echo view('templates/d_header', $data = [
            'usu' => $usu,
            'title' => 'Editar Usuario'
        ]);
        echo view('usuario/novoUsuario');
        echo view('templates/d_footer');
    }
    //--------------------------------------------------------------------


    //--------------------------------------------------------------------
    public function criarUsuario() {
        if (!$this->checkSession()) {
            $this->login();
            return;
        }
        $data = [
            'title' => 'Usuário'
        ];
        echo view('templates/d_header', $data);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_user' => $this->request->getVar('id_user'),
                'username' => $this->request->getVar('username'),
                'password' => MD5(SHA1($this->request->getVar('password'))),
                'email' => $this->request->getVar('email'),
                'nome' => $this->request->getVar('nome'),
                'sobre' => $this->request->getVar('sobre'),
                'id_perfil' => $this->request->getVar('perfil')
            ];
            //dd($data);
            if (!$this->ehAdmin() && !$data['id_user']) {//só admin pode criar usuario
                echo view('templates/d_header', $data = ['title' => 'Acesso negado']);
                echo view('usuario/acessoproibido');
                echo view('templates/d_footer');
                return;
            }
            $img = new Imagem();
            if (!$this->usuarioModel->store($data)) {//se falhou

                $data = [
                    'errors' => $this->usuarioModel->errors()
                ];
                $this->sessao->setFlashdata($data);
                return redirect()->back()->withInput();

            } else if ($data['id_user']) {//editar
                if (!empty($_FILES['avatar']['name'])) {//enviou imagem?
                    $imagem = $img->uploadImg('/imgs/users/avatar/', 'avatar');
                    $caminho = $this->usuarioModel->db->query('SELECT avatar FROM user WHERE id_user = ?', $data['id_user'])->getResult('array')[0]['avatar'];
                    if ($caminho != '/imgs/users/avatar/default/default_user.jpg') {//pra nao apagar a imagem default
                        unlink($_SERVER['DOCUMENT_ROOT'] . $this->usuarioModel->db->query('SELECT avatar FROM user WHERE id_user = ?', $data['id_user']
                            )->getResult('array')[0]['avatar']);//apaga a imagem antiga
                    }
                    $this->usuarioModel->db->query('UPDATE user SET avatar = ? WHERE id_user = ?', [$imagem, $data['id_user']]);//atualiza pra nova
                }

            } else {//inserir novo

            }

        }

        echo view('usuario/novoUsuario');
        echo view('templates/d_footer', $data);
    }
    //--------------------------------------------------------------------

    //--------------------------------------------------------------------
    public function getPerfis() {//retorna * from perfis
        return $this->usuarioModel->getAllPerfis();
    }
    //--------------------------------------------------------------------

    //--------------------------------------------------------------------
    public function getTipoDoPerfil($id = null) {//retorna um perfil especifico
        //dd($id);
        return $this->usuarioModel->getPerfil($id);
    }

    //--------------------------------------------------------------------
    public function login() {
        if ($this->checkSession()) {
            echo view('templates/d_header', $data = ['title' => 'Bem vindo']);
            echo view('usuario/welcome');
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

    private function setSession($data = null) {
        $sessionData = [
            'id_user' => $data['id_user'],
            'nome' => $data['nome'],
            'avatar' => $data['avatar'],
            'sobre' => $data['sobre'],
            'email' => $data['email'],
            'id_perfil' => $data['id_perfil'],
            'username' => $data['username']
        ];

        $this->sessao->set($sessionData);
    }

    //--------------------------------------------------------------------

    public function checkSession() {
        return $this->sessao->has('id_user');
    }

    //--------------------------------------------------------------------

    public function logout() {
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

