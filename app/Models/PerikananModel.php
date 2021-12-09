<?php

namespace App\Models;

use CodeIgniter\Model;

class PerikananModel extends Model
{
    protected $table                = 'prod_ikan';
    protected $primaryKey           = 'id_ikan';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['jenis_ikan', 'jml_prod', 'lama_prod', 'waktu_prod', 'biaya_prod', 'harga_hsl_prod', 'wadah_budidaya', 'sumber_pengairan', 'benih', 'jns_asal_pakan', 'alat_teknologi', 'peman_hsl_prod', 'limbah_hsl_prod', 'naman_anc', 'penanggulangan', 'id_kom', 'id_tp', 'id_sp', 'id_ip', 'id_produsen'];

    // Dates
    protected $useTimestamps        = true;

    public function getIkan($id_ikan = false)
    {
        if ($id_ikan == false) {
            return $this->db->table('prod_ikan')
                ->join('komoditas', 'komoditas.id_kom=prod_ikan.id_kom')
                ->join('tempat_prod', 'tempat_prod.id_tp=prod_ikan.id_tp')
                ->join('sentra_prod', 'sentra_prod.id_sp=prod_ikan.id_sp')
                ->join('infras_prod', 'infras_prod.id_ip=prod_ikan.id_ip')
                ->join('produsen', 'produsen.id_produsen=prod_ikan.id_produsen')
                ->get()->getResultArray();
        }

        return $this->where(['id_ikan' => $id_ikan])
            ->join('komoditas', 'komoditas.id_kom=prod_ikan.id_kom')
            ->join('tempat_prod', 'tempat_prod.id_tp=prod_ikan.id_tp')
            ->join('sentra_prod', 'sentra_prod.id_sp=prod_ikan.id_sp')
            ->join('infras_prod', 'infras_prod.id_ip=prod_ikan.id_ip')
            ->join('produsen', 'produsen.id_produsen=prod_ikan.id_produsen')
            ->first();
    }
}
