<?php

namespace App\Models;

use CodeIgniter\Model;

class SentraModel extends Model
{
    protected $table                = 'sentra_prod';
    protected $primaryKey           = 'id_sp';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_sp', 'kecamatan', 'kelurahan'];

    // Dates
    protected $useTimestamps        = true;
}
