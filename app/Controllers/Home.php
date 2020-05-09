<?php

namespace App\Controllers;

use App\Models\NoticiasModel;

class Home extends BaseController {
    protected $model;

    public function __construct() {
        $this->model = new NoticiasModel();
    }

    public function index() {
        $data = [
            'title' => 'Home',
            'newsPrev' => $this->model->get()->paginate(4),
            'pager' => $this->model->pager
        ];
        //dd($data);
        echo view('templates/t2_header', $data);
        echo view('home');
        echo view('templates/t2_footer');
    }


    public function buscar() {
        $valor = $this->request->getVar('valor');
        if (!$valor) {
            redirect($this->index());
        } else {
            $data = [
                'newsPrev' => $this->model->buscar($valor,4),
                'title' => 'Busca ['.$valor.']',
                'pager' => $this->model->pager
            ];
            echo view('templates/t2_header', $data);
            echo view('home');
            echo view('templates/t2_footer');
        }
    }

    //--------------------------------------------------------------------

}
