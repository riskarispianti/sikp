<?php

namespace App\Models;

use CodeIgniter\Model;

class KecModel extends Model
{
    protected $table                = 'kecamatan';
    protected $primaryKey           = 'id_kec';
    protected $allowedFields        = ['kecamatan'];
}
