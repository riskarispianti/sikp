<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodternak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ternak'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_ternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jml_populasi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'lama_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'waktu_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'biaya_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga_hsl_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sistem_pemel_ternak'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'benih'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alat_teknologi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'peman_hsl_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'limbah_hsl_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_anc'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_tp'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_sp'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_ip'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_produsen'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created-at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated-at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_ternak', true);
        $this->forge->createTable('prod_ternak', true);
    }

    public function down()
    {
        $this->forge->dropTable('prod_ternak');
    }
}
