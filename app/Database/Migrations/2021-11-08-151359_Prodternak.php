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
        $this->forge->addKey('id_ternak', true);
        // $this->forge->addForeignKey('id_kom', 'komoditas', 'id_kom');
        // $this->forge->addForeignKey('id_anc', 'ancaman', 'id_anc');
        // $this->forge->addForeignKey('id_tp', 'tempat_prod', 'id_tp');
        // $this->forge->addForeignKey('id_sp', 'sentra_prod', 'id_sp');
        // $this->forge->addForeignKey('id_ip', 'infras_prod', 'id_ip');
        // $this->forge->addForeignKey('id_produsen', 'produsen', 'id_produsen');
        $this->forge->createTable('prod_ternak');
    }

    public function down()
    {
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_kom_foreign');
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_anc_foreign');
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_tp_foreign');
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_sp_foreign');
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_ip_foreign');
        // $this->forge->dropForeignKey('prod_ternak', 'prod_ternak_id_produsen_foreign');
        $this->forge->dropTable('prod_ternak');
    }
}
