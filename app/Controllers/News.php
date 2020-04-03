<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller {

    public function index() {

        $model = new NewsModel();
        $data = [
            'news' => $model->getNews(),
            'title' => 'Notícias arquivadas',
        ];
        echo view('templates/header', $data);
        echo view('pages/overview', $data);
        echo view('templates/footer');
    }

    public function view($slug = null) {

        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);
        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];
        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer');
    }

    public function create() {
        helper('form');
        $model = new NewsModel();

        $rules = [//regras de validação
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'
        ];
        $data = [
            'title' => 'Criar notícia'
        ];

        if (!$this->validate($rules)) {
            echo view('templates/header', $data);
            echo view('news/create');
            echo view('templates/footer');
        } else {
            $data = [
                'title' => $this->request->getVar('title'),
                'slug' => url_title($this->retiraAcentos($this->request->getVar('title')), "-", false),
                'body' => $this->request->getVar('body')
            ];
            $model->save($data);
            echo view('news/success');
        }
    }

    function retiraAcentos($string) {
        $acentos = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $sem_acentos = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $string = strtr($string, utf8_decode($acentos), $sem_acentos);
        $string = str_replace(" ", "-", $string);
        return utf8_decode($string);
    }

}
