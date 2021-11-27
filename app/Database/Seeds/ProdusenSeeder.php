<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ProdusenSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'jml_penghasil_kom'     => $faker->buildingNumber(),
                'pembinaan'             => $faker->companySuffix(),
                'kelembagaan'           => $faker->company(),
                'kesejahteraan'         => 'kesejateraan petani',
                'created_at'            => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'            => Time::now()
            ];

            // Using Query Builder
            $this->db->table('produsen')->insert($data);
        }
    }
}
