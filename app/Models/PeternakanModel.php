<?php

namespace App\Models;

use CodeIgniter\Model;

class PeternakanModel extends Model
{
    protected $table                = 'prod_ternak';
    protected $primaryKey           = 'id_ternak';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = [];

    // Dates
    protected $useTimestamps        = true;

    public function getTernak($id_ternak = false)
    {
        if ($id_ternak == false) {
            return $this->db->table('prod_ternak')
                ->join('komoditas', 'komoditas.id_kom=prod_ternak.id_kom')
                ->join('tempat_prod', 'tempat_prod.id_tp=prod_ternak.id_tp')
                ->join('sentra_prod', 'sentra_prod.id_sp=prod_ternak.id_sp')
                ->join('infras_prod_ternak', 'infras_prod_ternak.id_ipt=prod_ternak.id_ipt')
                ->join('produsen', 'produsen.id_produsen=prod_ternak.id_produsen')
                ->get()->getResultArray();
        }

        return $this->where(['id_ternak' => $id_ternak])
            ->join('komoditas', 'komoditas.id_kom=prod_ternak.id_kom')
            ->join('tempat_prod', 'tempat_prod.id_tp=prod_ternak.id_tp')
            ->join('sentra_prod', 'sentra_prod.id_sp=prod_ternak.id_sp')
            ->join('infras_prod_ternak', 'infras_prod_ternak.id_ipt=prod_ternak.id_ipt')
            ->join('produsen', 'produsen.id_produsen=prod_ternak.id_produsen')
            ->first();
    }
}
