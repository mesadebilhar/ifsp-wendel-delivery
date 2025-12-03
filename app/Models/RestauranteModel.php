<?php

namespace App\Models;

use CodeIgniter\Model;

class RestauranteModel extends Model
{
    protected $table            = 'restaurante';
    protected $primaryKey       = 'id_restaurante';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['restaurante_nome', 'cnpj', 'dono_fk', 'endereco_restaurante'];

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

    public function getRestaurantes(){
        return $this->select('restaurante.id_restaurante,restaurante_nome,endereco_restaurante, u.nome')
        ->join('usuario u', 'restaurante.dono_fk = u.id_user')
        ->findAll();
    }

    public function searchRestaurante($nome){
        return $this->select('restaurante.id_restaurante,restaurante_nome,endereco_restaurante,dono.nome')
        ->join('usuario dono', 'restaurante.dono_fk = dono.id_user')
        ->like('restaurante_nome', $nome)
        ->findAll();
    }
}
