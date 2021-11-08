<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodtanam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tanam'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_tanam'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ls_tanam'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ls_panen'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'produktivitas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jml_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'lama_proses_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'perk_iklim'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'perk_tanam_panen'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'biaya_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga_jual_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'lahan_prod'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sumber_pengairan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'bibit'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pupuk'       => [
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
        $this->forge->addKey('id_tanam', true);
        $this->forge->createTable('prod_tanam', true);
    }

    public function down()
    {
        $this->forge->dropTable('prod_tanam');
    }
}
