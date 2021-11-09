<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prof'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dinas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'visimisi'       => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sejarah' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'logo_dinas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password'       => [
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
        $this->forge->addKey('id_prof', true);
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
