<?php

namespace App\Models;

use \CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nome', 'username', 'password', 'email', 'perfil',
        'avatar', 'sobre', 'last_login', 'id_perfil'
    ];
    protected $validationRules = [
        'nome' => 'required|max_length[20]',
        'username' => 'required|min_length[3]|max_length[20]',
        'password' => 'required',
        'email' => 'required|valid_email'
        ///'perfil' => 'required'
    ];
    protected $validationMessages = [
        'nome' => ['required' => 'Campo nome obrigatorio', 'max_length' => 'O campo título deve ter no máximo 20 caracteres'],
        'username' => ['required' => 'Campo username obrigatorio', 'min_length' => 'O campo username deve ter ao menos 3 caracteres', 'max_length' => 'O campo username deve ter no máximo 20 caracteres'],
        'password' => ['required' => 'Campo password obrigatorio'],
        'email' => ['required' => 'Campo email obrigatorio', 'valid_email' => 'Digite um email válido']
        //'perfil' => ['required' => 'Escolha um perfil de usuário']
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

    public function getPerfil($id = null) {
        return $this->db->query("SELECT * FROM profile WHERE id_profile = ?", $id)->getResult('array');
    }
}