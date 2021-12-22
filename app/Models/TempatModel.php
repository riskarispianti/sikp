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

    public function getTem($id_tp, $kepemilikan)
    {
        // $query  =
        //     "SELECT * FROM tempat_prod WHERE (id_tp LIKE '%" . $id_tp . "%' AND kepemilikan LIKE '%" . $kepemilikan . "%')";

        // return $this->db->query($query);

        $array = ['id_tp' => $id_tp, 'kepemilikan' => $kepemilikan];
        // $builder->like($array);
        return $this->like($array)->get()->getResultArray();
    }
}
