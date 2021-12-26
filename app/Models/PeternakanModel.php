<?php

namespace App\Models;

use CodeIgniter\Model;

class PeternakanModel extends Model
{
    protected $table                = 'prod_ternak';
    protected $primaryKey           = 'id_ternak';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['jenis_ternak', 'jml_populasi', 'lama_prod', 'waktu_prod', 'biaya_prod', 'harga_hsl_prod', 'sistem_pemel_ternak', 'benih', 'alat_teknologi', 'peman_hsl_prod', 'limbah_hsl_prod', 'nama_anc', 'penanggulangan', 'id_kom', 'id_tp', 'id_ipt', 'id_produsen'];

    // Dates
    protected $useTimestamps        = true;

    public function getTernak($id_ternak = false)
    {
        if ($id_ternak == false) {
            return $this->db->table('prod_ternak')
                ->join('komoditas', 'komoditas.id_kom=prod_ternak.id_kom')
                ->join('tempat_prod', 'tempat_prod.id_tp=prod_ternak.id_tp')
                // ->join('sentra_prod', 'sentra_prod.id_sp=prod_ternak.id_sp')
                ->join('infras_prod_ternak', 'infras_prod_ternak.id_ipt=prod_ternak.id_ipt')
                ->join('produsen', 'produsen.id_produsen=prod_ternak.id_produsen')
                ->join('kecamatan', 'kecamatan.id_kec=tempat_prod.id_kec')
                ->join('kelurahan', 'kelurahan.id_kel=tempat_prod.id_kel')
                ->get()->getResultArray();
        }

        return $this->where(['id_ternak' => $id_ternak])
            ->join('komoditas', 'komoditas.id_kom=prod_ternak.id_kom')
            ->join('tempat_prod', 'tempat_prod.id_tp=prod_ternak.id_tp')
            // ->join('sentra_prod', 'sentra_prod.id_sp=prod_ternak.id_sp')
            ->join('infras_prod_ternak', 'infras_prod_ternak.id_ipt=prod_ternak.id_ipt')
            ->join('produsen', 'produsen.id_produsen=prod_ternak.id_produsen')
            ->join('kecamatan', 'kecamatan.id_kec=tempat_prod.id_kec')
            ->join('kelurahan', 'kelurahan.id_kel=tempat_prod.id_kel')
            ->first();
    }
}
