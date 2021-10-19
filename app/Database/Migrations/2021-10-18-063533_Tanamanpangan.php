<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tanamanpangan extends Migration
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
            'nama_pangan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_pangan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'luas_tanam'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'luas_panen'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'produktivitas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lama_proses'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'iklim'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'waktu_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga_jual'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lahan_produksi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sumber_pengairan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'bibit'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pupuk'       => [
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
            'kepemilikan_dan_status_lahan'       => [
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
            'prasarana_pengairan'       => [
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
            'jumlah_petani'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pembinaan_petani'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelembagaan_petani'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kesejahteraan_petani'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tanaman_pangan');
    }

    public function down()
    {
        $this->forge->dropTable('tanaman_pangan');
    }
}
