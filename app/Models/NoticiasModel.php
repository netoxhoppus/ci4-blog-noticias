<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model {

    protected $table = 'news';
    protected $allowedFields = ['title', 'body', 'slug'];
    protected $primaryKey = 'id';

    public function getNews($slug = false) {
        if ($slug === false) {
            return $this->findAll();
        }
        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function store($data = null) {
        return $this->save($data);
    }

    public function apagar($id = null){
        return $this->delete($id);
    }

}
