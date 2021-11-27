<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatModel extends Model
{
    protected $table                = 'tempat_prod';
    protected $primaryKey           = 'id_tp';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['letak_prod', 'luas_prod', 'kepemilikan', 'status_lahan'];

    // Dates
    protected $useTimestamps        = true;
}
