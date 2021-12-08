<?php

namespace App\Models;

use CodeIgniter\Model;

class barangModels extends Model
{
    protected $table      = 'tb_barang';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nama', 'jumlah', 'tanggal_masuk', 'keterangan', 'code', 'qr', 'kode_cabang', 'first_code', 'createdAt', 'updatedAt', 'deletedAt'];
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';
}