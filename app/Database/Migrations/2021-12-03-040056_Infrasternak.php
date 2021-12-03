<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Infrasternak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ipt'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kandang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'lok_rph'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kapasitas_rph'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pemilik'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_ipt', true);
        $this->forge->createTable('infras_prod_ternak');
    }

    public function down()
    {
        $this->forge->dropTable('infras_prod_ternak');
    }
}
