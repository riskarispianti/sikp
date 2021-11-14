<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanModel extends Model
{
    protected $table = "prod_tanam";
    protected $primaryKey = "id_tanam";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_tanam', 'id_kom', 'jenis_tanam', 'ls_tanam', 'ls_panen', 'produktivitas', 'jml_prod', 'lama_proses_prod',
        'perk_iklim', 'perk_tanam_panen', 'biaya_prod', 'harga_jual_prod', 'lahan_prod', 'sumber_pengairan', 'bibit', 'pupuk', 'alat_teknologi',
        'peman_hasil_prod', 'limbah_hasil_prod', 'id_anc', 'id_tp', 'id_sp', 'id_ip', 'id_produsen'
    ];

    public function getTanam()
    {
        return $this->db->table('prod_tanam')
            ->join('komoditas', 'komoditas.id_kom=prod_tanam.id_kom')
            ->join('ancaman', 'ancaman.id_anc=prod_tanam.id_anc')
            ->join('tempat_prod', 'tempat_prod.id_tp=prod_tanam.id_tp')
            ->join('sentra_prod', 'sentra_prod.id_sp=prod_tanam.id_sp')
            ->join('infras_prod', 'infras_prod.id_ip=prod_tanam.id_ip')
            ->join('produsen', 'produsen.id_produsen=prod_tanam.id_produsen')
            ->get()->getResultArray();
    }
}
