<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use CodeIgniter\Controller;

class Home extends Controller {
    protected $noticiasModel;
    protected $sessao;

    public function __construct() {
        $this->noticiasModel = new NoticiasModel();
        $this->sessao = session();
    }

    //--------------------------------------------------------------------

    public function index() {
        $not = new Noticias();
        //dd($not->getAutor(1));
        $data = [
            'title' => 'Home',
            'newsPrev' => $this->noticiasModel->get()->paginate(4),
            'pager' => $this->noticiasModel->pager
        ];
        //dd($data);
        echo view('templates/t2_header', $data);
        echo view('home');
        echo view('templates/t2_footer');
    }

    //--------------------------------------------------------------------

    public function buscar() {
        $valor = $this->request->getVar('valor');
        if (!$valor) {
            redirect($this->index());
        } else {
            $data = [
                'newsPrev' => $this->noticiasModel->buscar($valor, 4),
                'title' => 'Busca [' . $valor . ']',
                'pager' => $this->noticiasModel->pager
            ];
            echo view('templates/t2_header', $data);
            echo view('home');
            echo view('templates/t2_footer');
        }
    }

    //--------------------------------------------------------------------

}
