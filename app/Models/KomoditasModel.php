<?php

namespace App\Models;

use CodeIgniter\Model;

class KomoditasModel extends Model
{
    protected $table                = 'komoditas';
    protected $primaryKey           = 'id_kom';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['komoditas'];
    // Dates
    protected $useTimestamps        = true;
}
