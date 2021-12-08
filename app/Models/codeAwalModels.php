<?php

namespace App\Models;

use CodeIgniter\Model;

class codeAwalModels extends Model
{
    protected $table      = 'tb_code_awal';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nama', 'code', 'createdAt', 'updatedAt', 'deletedAt'];
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';
}