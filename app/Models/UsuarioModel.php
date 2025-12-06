<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuario';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    =  ['nome','sobrenome','cpf','email','senha','endereco_user','user_type'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    //roubado do professor.
    protected function hashSenha($data)
    {
        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        return $data;
    }

    // método para validar usuário/senha (form de Login)
    public function check($email,$senha) 
    {
        //busca o usuário
        $buscaUsuario = $this->where('email', $email)->where('senha',$senha)->first();
        if(is_null($buscaUsuario)) {
            return false;
        }
        // validar a senha
        // if(! password_verify($senha, $buscaUsuario->senha)) {
        //     return false;
        // }

        return $buscaUsuario;
    }

    public function contaRegistrada($email)
{
    return $this->where('email', $email) 
                ->first();
}
}
