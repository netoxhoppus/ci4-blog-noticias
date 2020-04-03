<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model{

    protected $table = 'news';
    protected $allowedFields = ['title', 'body', 'slug'];
    public function getNews($slug = false){
        if ($slug === false){
            return $this->findAll();
        }
        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function store($id = null, $data = null) {
        if ($data) {
            if ($id) {
                //aqui vai editar
                if ($this->update($data)) {//aprender isso ainda
                    return true;
                }
            } else {
                //aqui vai inserir
                if ($this->save($data)) {
                    return true;
                }
                return false;
            }
        } else {//se nao tiver dados
             return false;
        }
    }
}