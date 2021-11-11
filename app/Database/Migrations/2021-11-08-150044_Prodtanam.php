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
            'created_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_tanam', true);
        $this->forge->createTable('prod_tanam');
    }

    public function down()
    {
        $this->forge->dropTable('prod_tanam');
    }
}
