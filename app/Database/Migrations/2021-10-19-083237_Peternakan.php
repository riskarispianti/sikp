<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peternakan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_hewan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_ternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_populasi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lama_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'waktu_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'biaya_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga_jual_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sistem_pemeliharaan_ternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'benih'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'alat_teknologi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pemanfaatan_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'limbah_produksi_dan_pengelolaanya'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ancaman_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'letak_dan_luas_produksi'                 => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kepemilikan_dan_tempat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_sentra_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi_sentra_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kandang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rph'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_peternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pembinaan_peternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelembagaan_peternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kesejahteraan_peternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peternakan');
    }

    public function down()
    {
        $this->forge->dropTable('peternakan');
    }
}
