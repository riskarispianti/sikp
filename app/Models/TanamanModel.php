<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanModel extends Model
{
    protected $table = 'prod_tanam';
    protected $primaryKey = 'id_tanam';
    protected $useAutoIncrement = true;
    protected $allowedFields  = ['jenis_tanam', 'ls_tanam', 'ls_panen', 'produktivitas', 'jml_prod', 'lama_proses_prod', 'perk_iklim', 'perk_tanam_panen', 'biaya_prod', 'harga_jual_prod', 'lahan_prod', 'sumber_pengairan', 'bibit', 'pupuk', 'alat_teknologi', 'peman_hsl_prod', 'limbah_hsl_prod', 'nama_anc', 'penanggulangan', 'id_kom', 'id_tp', 'id_sp', 'id_ip', 'id_produsen'];

    protected $useTimestamps = true;

    public function getTanam($id_tanam = false)
    {
        if ($id_tanam == false) {
            return $this->db->table('prod_tanam')
                ->join('komoditas', 'komoditas.id_kom=prod_tanam.id_kom')
                ->join('tempat_prod', 'tempat_prod.id_tp=prod_tanam.id_tp')
                ->join('sentra_prod', 'sentra_prod.id_sp=prod_tanam.id_sp')
                ->join('infras_prod', 'infras_prod.id_ip=prod_tanam.id_ip')
                ->join('produsen', 'produsen.id_produsen=prod_tanam.id_produsen')
                ->join('ancaman', 'ancaman.id_anc=prod_tanam.id_anc')
                ->get()->getResultArray();
        }

        return $this->where(['id_tanam' => $id_tanam])
            ->join('komoditas', 'komoditas.id_kom=prod_tanam.id_kom')
            ->join('tempat_prod', 'tempat_prod.id_tp=prod_tanam.id_tp')
            ->join('sentra_prod', 'sentra_prod.id_sp=prod_tanam.id_sp')
            ->join('infras_prod', 'infras_prod.id_ip=prod_tanam.id_ip')
            ->join('produsen', 'produsen.id_produsen=prod_tanam.id_produsen')
            ->join('ancaman', 'ancaman.id_anc=prod_tanam.id_anc')
            ->first();
    }
}
