<?php

namespace App\Models;

use CodeIgniter\Model;

class InfrasternakModel extends Model
{
    protected $table                = 'infras_prod_ternak';
    protected $primaryKey           = 'id_ipt';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['pemilik', 'kandang', 'lok_rph', 'kapasitas_rph'];

    // Dates
    protected $useTimestamps        = true;
}
