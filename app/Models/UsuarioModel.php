<?php

namespace App\Models;

use \CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'password'];

    public function getUser($name = null, $pass = null) {
        $data = [
            'name' => $name,
            'password' => $pass
        ];
        return $this->asArray()->where($data)->first();

    }


}