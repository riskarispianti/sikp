<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelurahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kel'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kec'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'kelurahan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('id_kel', true);
        $this->forge->createTable('kelurahan');
    }

    public function down()
    {
        $this->forge->dropTable('kelurahan');
    }
}
