<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kecamatan'   => '.....',
                'kelurahan'   => '.....'
            ],
            [
                'kecamatan'   => '.....',
                'kelurahan'   => '.....'
            ],
        ];

        // Using Query Builder
        $this->db->table('lokasi')->insertBatch($data);
    }
}
