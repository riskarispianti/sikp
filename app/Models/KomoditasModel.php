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

    public function getKomoditas($id_kom = false)
    {
        if ($id_kom == false) {
            return $this->findAll();
        }

        return $this->where(['id_kom' => $id_kom])->first();
    }
}
