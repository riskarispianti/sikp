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
        $this->forge->createTable('produsen', true);
    }

    public function down()
    {
        $this->forge->dropTable('produsen');
    }
}
