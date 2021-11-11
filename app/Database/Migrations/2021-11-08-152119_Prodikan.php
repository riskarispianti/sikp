<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_ikan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jml_prod'       => [
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
            'wadah_budidaya'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sumber_pengairan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'benih'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jns_asal_pakan'       => [
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
        $this->forge->addKey('id_ikan', true);
        $this->forge->createTable('prod_ikan');
    }

    public function down()
    {
        $this->forge->dropTable('prod_ikan');
    }
}
