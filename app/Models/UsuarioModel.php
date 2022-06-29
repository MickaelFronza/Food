<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{ 
    protected $useTimestamps        = true;
    protected $createdField         = 'criado_em'; 
    protected $updatedField         = 'atualizado_em'; 
    protected $deletedField         = 'deletado_em';
    protected $table            = 'usuarios';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['nome', 'email', 'telefone'];
}
