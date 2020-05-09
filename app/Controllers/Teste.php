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
        echo view('templates/t2_header', $data);
        echo view('teste');
        echo view('templates/t2_footer');
    }

}


