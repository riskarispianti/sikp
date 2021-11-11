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
            'id_tanam'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_ternak'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_ikan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
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
        $this->forge->addForeignKey('id_tanam', 'prod_tanam', 'id_tanam');
        $this->forge->addForeignKey('id_ternak', 'prod_ternak', 'id_ternak');
        $this->forge->addForeignKey('id_ikan', 'prod_ikan', 'id_ikan');
        $this->forge->createTable('komoditas');
    }

    public function down()
    {
        $this->forge->dropForeignKey('komoditas', 'komoditas_id_tanam_foreign');
        $this->forge->dropForeignKey('komoditas', 'komoditas_id_ternak_foreign');
        $this->forge->dropForeignKey('komoditas', 'komoditas_id_ikan_foreign');
        $this->forge->dropTable('komoditas');
    }
}
