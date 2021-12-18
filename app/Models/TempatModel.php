<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatModel extends Model
{
    protected $table                = 'tempat_prod';
    protected $primaryKey           = 'id_tp';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kecamatan', 'kelurahan', 'letak_prod', 'luas_prod', 'kepemilikan', 'status_lahan'];

    // Dates
    protected $useTimestamps        = true;

    // public function cekTempat($id_tp = null, $pemilik = null)
    // {
    //     return $this->where(['id_tp' => $id_tp])
    //         ->like(['id_tp' => $id_tp])
    //         ->like(['pemilik' => $pemilik])
    //         ->get()->getResultArray();
    // }

    public function getTem($id_tp = null)
    {
        return $this->where(['id_tp' => $id_tp])
            ->like(['id_tp' => $id_tp])
            ->like('pemilik')
            ->get();
    }
}
