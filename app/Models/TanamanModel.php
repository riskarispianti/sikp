<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanModel extends Model
{
    protected $table = "tanaman_pangan";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 'nama_pangan', 'jenis_pangan', 'luas_tanam', 'luas_panen', 'produktivitas', 'jumlah_produksi', 'lama_proses',
        'iklim', 'waktu_produksi', 'harga_jual', 'lahan_produksi', 'sumber_pengairan', 'bibit', 'pupuk', 'alat_teknologi',
        'pemanfaatan_produksi', 'limbah_produksi', 'ancamana_produksi', 'letak_dan_luas_produksi', 'kepemilikan_dan_status_lahan',
        'nama_sentra_produksi', 'lokasi_sentra_produksi', 'prasarana_pengairan', 'pengelolaan_jaringan', 'infrastruktur_pengelolaan',
        'jumlah_petani', 'pembinaan_petani', 'kelembagaan_petani', 'kesejahteraan_petani'
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
