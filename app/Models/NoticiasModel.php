<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model {

    protected $table = 'news';
    protected $allowedFields = ['title', 'body', 'slug'];

    public function buscar($valor = null) {
        $builder = $this->db->table('news');
        return $builder->like('title', $valor)->orLike('body', $valor)->get()->getResult('array');
    }

    public function getNews($slug = false) {
        if ($slug === false) {
            return $this->paginate(5);
        }
        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function store($data = null) {
        return $this->save($data);
    }

    public function apagar($id = null) {
        return $this->delete($id);
    }

}
