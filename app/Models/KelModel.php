<?php

namespace App\Models;

use CodeIgniter\Model;

class KelModel extends Model
{
    protected $table                = 'kelurahan';
    protected $primaryKey           = 'id_kel';
    protected $allowedFields        = ['id_kec', 'kelurahan'];
}
