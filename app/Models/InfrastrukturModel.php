<?php

namespace App\Models;

use CodeIgniter\Model;

class InfrastrukturModel extends Model
{
    protected $table                = 'infras_prod';
    protected $primaryKey           = 'id_ip';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['sarana_pengairan', 'pengel_jar_irigasi', 'infras_pengel_air', 'kandang', 'rph'];

    // Dates
    protected $useTimestamps        = true;
}
