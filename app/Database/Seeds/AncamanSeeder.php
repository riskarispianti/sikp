<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AncamanSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'nama_anc'          => $faker->firstName(),
                'penanggulangan'    => $faker->text(),
                'created_at'        => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'        => Time::now()
            ];

            // Using Query Builder
            $this->db->table('ancaman')->insert($data);
        }
    }
}
