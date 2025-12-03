<?php

namespace App\Models;

use CodeIgniter\Model;

class RestauranteCardapioModel extends Model
{
    protected $table            = 'cardapio_restaurante';
    protected $primaryKey       = 'id_index';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_restaurante_fk', 'id_produto_fk'];

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

    public function getCardapioPorRestaurante($id_restaurante){
        return $this->select('cardapio_restaurante.id_index,cardapio.produto_nome,cardapio.preco,restaurante.restaurante.nome,restaurante.ederenco_restaurante')
        ->join('restaurante','cardapio_resturante.id_restaurante_fk = restaurante.id_restaurante')
        ->join('cardapio','cardapio_restaurante.id_produto_fk = cardapio.id_produto')
        ->findAll();
      }
}
