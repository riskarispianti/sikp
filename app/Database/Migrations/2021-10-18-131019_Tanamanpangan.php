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
            'jumlah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'luas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tanamanpangan');
    }

    public function down()
    {
        $this->forge->dropTable('tanamanpangan');
    }
}
