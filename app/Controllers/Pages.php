<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller {
    private $sessao;

    public function __construct() {
        $this->sessao = new Usuario();
    }

    public function index() {
        return view('Views\welcome_message');
    }

    public function showme($page = 'home') {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter

       // echo view('templates/t2_header', $data);
        echo view('pages/' . $page, $data);
        //echo view('templates/t2_footer', $data);
    }
}
