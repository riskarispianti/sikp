<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sentraprod extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sp'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_sp'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelurahan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_tanam'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'id_ternak'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'id_ikan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
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
        $this->forge->addKey('id_sp', true);
        $this->forge->createTable('sentra_prod');
    }

    public function down()
    {
        $this->forge->dropTable('sentra_prod');
    }
}
