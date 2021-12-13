<?php

namespace App\Models;

use CodeIgniter\Model;

class KomoditasModel extends Model
{
    protected $table                = 'komoditas';
    protected $primaryKey           = 'id_kom';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['komoditas', 'g_kom'];
    // Dates
    protected $useTimestamps        = true;

    public function getTer($id_kom = false)
    {
        if ($id_kom == false) {
            return $this->db->table('komoditas')->get()->getResultArray();
        }

        return $this->where(['g_kom' => 'Peternakan'])
            ->get()->getResultArray();
    }

    public function getTan($id_kom = false)
    {
        if ($id_kom == false) {
            return $this->db->table('komoditas')->get()->getResultArray();
        }

        return $this->where(['g_kom' => 'Tanaman'])
            ->get()->getResultArray();
    }

    public function getIka($id_kom = false)
    {
        if ($id_kom == false) {
            return $this->db->table('komoditas')->get()->getResultArray();
        }

        return $this->where(['g_kom' => 'Perikanan'])
            ->get()->getResultArray();
    }
}
