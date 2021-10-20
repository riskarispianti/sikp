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
            'nama_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Jumlah_produksi'       => [
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
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('perikanan');
    }

    public function down()
    {
        $this->forge->dropTable('perikanan');
    }
}
