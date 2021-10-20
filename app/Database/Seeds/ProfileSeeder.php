<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'logo' => '/img/logo_portal.png',
            'nama_dinas'    => 'Fakultas Ilmu Komputer',
            'deskripsi'    => 'ini fasilkom',
            'username'    => 'fasilkom',
            'password'    => 'fasilkom'
        ];
        $this->db->table('profile')->insert($data);
    }
}
