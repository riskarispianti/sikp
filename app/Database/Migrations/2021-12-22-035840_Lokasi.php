<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lokasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lok'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kecamatan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelurahan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_lok', true);
        $this->forge->createTable('lokasi');
    }

    public function down()
    {
        $this->forge->dropTable('lokasi');
    }
}
