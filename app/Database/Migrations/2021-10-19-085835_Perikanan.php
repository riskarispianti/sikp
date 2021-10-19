<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perikanan extends Migration
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
            'jenis_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_produksi'       => [
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
            'wadah_budidaya'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sumber_pengairan'       => [
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
            'kepemilikan_dan_status'       => [
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
            'sarana_pengairan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pengelolaan_jaringan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'infrastruktur_pengelolaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_peternak_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pembinaan_peternak_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelembagaan_peternak_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kesejahteraan_peternak_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('perikanan');
    }

    public function down()
    {
        $this->forge->dropTable('perikanan');
    }
}
