<?php

namespace App\Models;

use CodeIgniter\Model;

class InfrasternakModel extends Model
{
    protected $table                = 'infras_prod_ternak';
    protected $primaryKey           = 'id_ipt';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kandang', 'lok_rph', 'kapasitas_rph', 'pemilik'];

    // Dates
    protected $useTimestamps        = true;
}
