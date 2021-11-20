<?php

namespace App\Models;

use CodeIgniter\Model;

class AncamanModel extends Model
{
    protected $table                = 'ancaman';
    protected $primaryKey           = 'id_anc';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_anc', 'penanggulangan'];

    // Dates
    protected $useTimestamps        = true;
}
