<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'logo' => '/img/logo_portal.png',
            'nama_dinas'    => 'Dinas Pertanian Subang',
            'deskripsi'    => 'Ini penjelasan tentang dinas pertanian di daerah subang',
            'username'    => 'user',
            'password'    => 'user'
        ];
        $this->db->table('profile')->insert($data);
    }
}
