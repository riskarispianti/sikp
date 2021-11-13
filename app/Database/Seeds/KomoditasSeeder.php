<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KomoditasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'komoditas'         => 'Padi',
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'komoditas'         => 'Sapi',
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'komoditas'         => 'Tomat',
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'komoditas'         => 'Telur',
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'komoditas'         => 'Cabai',
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('komoditas')->insertBatch($data);
    }
}
