<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model {

    protected $table = 'news';
    protected $allowedFields = ['title', 'body', 'slug'];

    public function buscar($valor = null, $qtdPages = null) {
        return $this->like('title', $valor)->orLike('body', $valor)->paginate($qtdPages);
    }

    public function getNews($slug = false) {
        if ($slug === false) {
            return $this->orderBy('data', 'DESC')->paginate(5);
        }
        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function get() {//sobrescreve o get pra usar minha query
        $this->orderBy('data', 'DESC');
        return $this;
    }

    public function store($data = null) {
        return $this->save($data);
    }

    public function apagar($id = null) {
        return $this->delete($id);
    }

}
