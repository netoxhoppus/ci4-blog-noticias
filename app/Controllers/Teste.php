<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Teste extends Controller {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }


    public function index() {
        $data = ['title' => 'teste'];
        helper('form');
        //echo view('templates/header', $data);
        echo view('usuario/login');
        //echo view('templates/footer');
    }

}


