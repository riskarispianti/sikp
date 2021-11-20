<?php
namespace App\Models;

use CodeIgniter\Model;

class TanamanModel extends Model
{
    protected $tabel = "prod_tanam";
    protected $primaryKey = "id_tanam";
    protected $useTimestamp = true;

    public function getTanam($id_tanam= false)
    {
        if ($id_tanam == false) {
        return $this->db->table('prod_tanam')
        ->join('komoditas', 'komoditas.id_kom=prod_tanam.id_kom')
        ->join('ancaman', 'ancaman.id_anc=prod_tanam.id_anc')
        ->join('tempat_prod', 'tempat_prod.id_tp=prod_tanam.id_tp')
        ->join('sentra_prod', 'sentra_prod.id_sp=prod_tanam.id_sp')
        ->join('infras_prod', 'infras_prod.id_ip=prod_tanam.id_ip')
        ->join('produsen','produsen.id_produsen=prod_tanam.id_produsen')
        ->get()->getResultArray();
    }
    return $this->where(['id_tanam' => $id_tanam])
    ->join('komoditas', 'komoditas.id_kom=prod_tanam.id_kom')
        ->join('ancaman', 'ancaman.id_anc=prod_tanam.id_anc')
        ->join('tempat_prod', 'tempat_prod.id_tp=prod_tanam.id_tp')
        ->join('sentra_prod', 'sentra_prod.id_sp=prod_tanam.id_sp')
        ->join('infras_prod', 'infras_prod.id_ip=prod_tanam.id_ip')
        ->join('produsen','produsen.id_produsen=prod_tanam.id_produsen')
    ->first();
}
}

