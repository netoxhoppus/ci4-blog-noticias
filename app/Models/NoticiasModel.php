<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model {

    protected $table = 'noticia';
    protected $primaryKey = 'id_news';
    protected $allowedFields = ['title', 'subtitle', 'body', 'slug', 'data_criacao', 'id_autor', 'img_capa'];

    protected $validationRules = [
        'title' => 'required|min_length[5]|max_length[255]',
        'subtitle' => 'required|min_length[10]',
        'body' => 'required|min_length[100]'];

    protected $validationMessages = [
        'title' => ['required' => 'Campo título obrigatorio', 'min_length' => 'O campo título deve ter ao menos 5 caracteres'],
        'subtitle' => ['required' => 'Campo subtítulo  obrigatorio', 'min_length' => 'O campo subtítulo deve ter ao menos 10 caracteres'],
        'body' => ['required' => 'Campo notícia obrigatorio', 'min_length' => 'O campo notícia deve ter ao menos 100 caracteres']
    ];

    protected $skipValidation = false;

    public function buscar($valor = null, $qtdPages = null) {
        return $this->like('title', $valor)->orLike('body', $valor)->paginate($qtdPages);
    }

    public function getAutor($id_autor = null) {
        return $this->db->query('SELECT U.nome FROM user AS U JOIN noticia AS N ON U.id_user = N.id_autor WHERE N.id_autor = ? ', $id_autor)->getResult('array');
    }

    public function getNews($slug = false) {
        if ($slug === false) {
            return $this->orderBy('data_criacao', 'DESC')->paginate(5);
        }
        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function get() {//sobrescreve o get pra usar minha query
        $this->orderBy('data_criacao', 'DESC');
        return $this;
    }

    public function store($data = null) {
        return $this->save($data);
    }

    public function apagar($id = null) {
        return $this->delete($id);
    }

}
