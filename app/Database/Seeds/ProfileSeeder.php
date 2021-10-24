<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     'logo' => '/img/logo_portal.png',
        //     'nama_dinas'    => 'Dinas Pertanian Subang',
        //     'deskripsi'    => 'Ini penjelasan tentang dinas pertanian di daerah subang',
        //     'username'    => 'user',
        //     'password'    => 'user'
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'logo' => $faker->image,
                'nama_dinas'    => $faker->company,
                'deskripsi'    => $faker->text,
                'username'    => $faker->name,
                'password'    => 'user'
            ];
            $this->db->table('profile')->insert($data);
        }
    }
}
