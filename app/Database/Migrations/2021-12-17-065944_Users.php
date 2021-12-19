<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_u'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_u'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gbr_u'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username_u'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_u'       => [
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
            ]
        ]);
        $this->forge->addKey('id_u', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
