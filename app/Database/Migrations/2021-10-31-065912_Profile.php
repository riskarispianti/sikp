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
            ]
        ]);
<<<<<<< HEAD
        $this->forge->addPrimaryKey('id', true);
=======
        $this->forge->addKey('id_prof', true);
>>>>>>> 42c3fbdb07bcb2d205690c703e3c359fdfd508a4
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
