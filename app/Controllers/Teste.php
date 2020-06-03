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
        //echo view('templates/d_header', $data);
        echo view('templates/share_button/botoes');//share_button/botoes.php
        //echo view('templates/d_footer');
    }

}


