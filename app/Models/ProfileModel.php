<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = "profile";
    protected $primaryKey = "username";
    protected $returnType = "object";
    //protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nama_dinas'];
}
