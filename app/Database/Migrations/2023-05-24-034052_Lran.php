<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tower_id_ne' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'site_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'long' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,7',
            ],
            'lat' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,7',
            ],
            'priority' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tower_id_fe' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'site_name_nd' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'long_nd' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,7',
            ],
            'lat_nd' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,7',
            ],
            'priority_nd' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ba_desain' => [
                'type'       => 'INTEGER',
            ],
            'ba_design_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pag_link' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'link_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'city_design' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'city_dominan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_design' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'span_seq' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'plan_ring' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type_design' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'flp' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'plan_distance_km' => [
                'type'       => 'INTEGER',
            ],
            'x_c' => [
                'type'       => 'INTEGER',
            ],
            'status_design_xc' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'syncron_own' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],            
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('lowran');
    }

    public function down()
    {
        $this->forge->dropTable('lowran');
    }
}
