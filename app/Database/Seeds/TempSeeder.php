<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TempSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'letak_prod'   => $faker->streetAddress(),
                'luas_prod'    => $faker->buildingNumber(),
                'kepemilikan'  => $faker->name(),
                'status_lahan' => $faker->text(),
                'created_at'   => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'   => Time::now()
            ];

            // Using Query Builder
            $this->db->table('tempat_prod')->insert($data);
        }
    }
}
