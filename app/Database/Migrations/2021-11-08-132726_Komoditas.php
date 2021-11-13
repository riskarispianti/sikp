<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komoditas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kom'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'komoditas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_kom', true);
        $this->forge->createTable('komoditas');
    }

    public function down()
    {
        $this->forge->dropTable('komoditas');
    }
}
