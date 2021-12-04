<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table                = "profile";
    protected $primaryKey           = "id_prof";
    //protected $useTimestamps      = true;
    protected $allowedFields        = ['username', 'password', 'logo_dinas', 'nama_dinas', 'visimisi', 'sejarah', 'alamat'];
}
