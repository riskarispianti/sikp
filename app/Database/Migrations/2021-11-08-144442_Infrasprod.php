<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Infrasprod extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ip'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sarana_pengairan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pengel_jar_irigasi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'infras_pengel_air'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_ip', true);
        $this->forge->createTable('infras_prod');
    }

    public function down()
    {
        $this->forge->dropTable('infras_prod');
    }
}
