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
            'nama_anc'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'penanggulangan'          => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'id_kom'          => [
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
        // $this->forge->addForeignKey('id_kom', 'komoditas', 'id_kom');
        // $this->forge->addForeignKey('id_anc', 'ancaman', 'id_anc');
        // $this->forge->addForeignKey('id_tp', 'tempat_prod', 'id_tp');
        // $this->forge->addForeignKey('id_sp', 'sentra_prod', 'id_sp');
        // $this->forge->addForeignKey('id_ip', 'infras_prod', 'id_ip');
        // $this->forge->addForeignKey('id_produsen', 'produsen', 'id_produsen');
        $this->forge->createTable('prod_tanam');
    }

    public function down()
    {
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_kom_foreign');
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_anc_foreign');
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_tp_foreign');
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_sp_foreign');
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_ip_foreign');
        // $this->forge->dropForeignKey('prod_tanam', 'prod_tanam_id_produsen_foreign');
        $this->forge->dropTable('prod_tanam');
    }
}
