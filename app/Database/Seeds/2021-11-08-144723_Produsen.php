<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produsen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produsen'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jml_penghasil_kom'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pembinaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kelembagaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kesejahteraan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_produsen', true);
        $this->forge->createTable('produsen');
    }

    public function down()
    {
        $this->forge->dropTable('produsen');
    }
}
