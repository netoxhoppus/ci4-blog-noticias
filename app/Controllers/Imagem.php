<?php
namespace App\Controllers;

use CodeIgniter\Config\Services;

class Imagem extends \CodeIgniter\Controller {

    public  $request;

    public function __construct() {
        $this->request = Services::request();
    }

    public function uploadImg($caminho = null, $input = null) {

        if ($file = $this->request->getFile($input)) {

            // Generate a new secure name
            $name = $file->getRandomName();

            // Move the file to it's new home
            $path = $_SERVER['DOCUMENT_ROOT'] . $caminho;

            $file->move($path, $name);

            return $caminho . $name;
        }
        return null;
    }
}