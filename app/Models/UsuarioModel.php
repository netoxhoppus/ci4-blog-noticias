<?php

namespace App\Models;

use \CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'id_user', 'username', 'password', 'email', 'nome',
        'avatar', 'sobre', 'last_login', 'id_perfil'
    ];

    public function getUser($name = null, $pass = null) {
        $data = [
            'username' => $name,
            'password' => $pass
        ];
        return $this->asArray()->where($data)->first();
    }

    public function store($data = null) {
        return $this->save($data);
    }

    public function getAllPerfis() {
        return $this->db->query("SELECT * FROM profile")->getResult('array');
    }
}