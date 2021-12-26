<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KecSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kecamatan'   => 'Binong'
            ],
            [
                'kecamatan'   => 'Blanakan'
            ],
            [
                'kecamatan'   => 'Ciasem'
            ],
            [
                'kecamatan'   => 'Ciater'
            ],
            [
                'kecamatan'   => 'Cibogo'
            ],
            [
                'kecamatan'   => 'Cijambe'
            ],
            [
                'kecamatan'   => 'Cikaum'
            ],
            [
                'kecamatan'   => 'Cipeundeuy'
            ],
            [
                'kecamatan'   => 'Cipunagara'
            ],
            [
                'kecamatan'   => 'Cisalak'
            ],
            [
                'kecamatan'   => 'Compreng'
            ],
            [
                'kecamatan'   => 'Dawuan'
            ],
            [
                'kecamatan'   => 'Jalancagak'
            ],
            [
                'kecamatan'   => 'Kalijati'
            ],
            [
                'kecamatan'   => 'Kasomalang'
            ],
            [
                'kecamatan'   => 'Legonkulon'
            ],
            [
                'kecamatan'   => 'Pabuaran'
            ],
            [
                'kecamatan'   => 'Pagaden'
            ],
            [
                'kecamatan'   => 'Pagaden Barat'
            ],
            [
                'kecamatan'   => 'Pamanukan'
            ],
            [
                'kecamatan'   => 'Patokbeusi'
            ],
            [
                'kecamatan'   => 'Purwadadi'
            ],
            [
                'kecamatan'   => 'Pusakajaya'
            ],
            [
                'kecamatan'   => 'Pusakanagara'
            ],
            [
                'kecamatan'   => 'Sagalaherang'
            ],
            [
                'kecamatan'   => 'Serangpanjang'
            ],
            [
                'kecamatan'   => 'Subang'
            ],
            [
                'kecamatan'   => 'Sukasari'
            ],
            [
                'kecamatan'   => 'Tambakdahan'
            ],
            [
                'kecamatan'   => 'Tanjungsiang'
            ],
        ];

        // Using Query Builder
        $this->db->table('kecamatan')->insertBatch($data);
    }
}
