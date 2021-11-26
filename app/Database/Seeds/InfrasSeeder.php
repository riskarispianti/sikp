<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class InfrasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'sarana_pengairan'         => 'sarana pengairan',
            'pengel_jar_irigasi'       => 'pengelolaan jaringan irigasi',
            'infras_pengel_air'        => 'infrastruktur pengelolaan air',
            'created_at'        => Time::now(),
            'updated_at'        => Time::now()
        ];

        // Using Query Builder
        $this->db->table('infras_prod')->insert($data);
    }
}
