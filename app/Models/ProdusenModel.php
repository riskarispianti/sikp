<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdusenModel extends Model
{
    protected $table                = 'produsen';
    protected $primaryKey           = 'id_produsen';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['jml_pengahasil_kom', 'pembinaan', 'kelembagaan', 'kesejahteraan'];

    // Dates
    protected $useTimestamps        = true;
}
