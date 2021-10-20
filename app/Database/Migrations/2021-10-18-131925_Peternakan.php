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
            'nama_ternak'       => [
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
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peternakan');
    }

    public function down()
    {
        $this->forge->dropTable('peternakan');
    }
}
