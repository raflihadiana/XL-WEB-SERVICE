<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
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
            'member_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'member_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'member_username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'member_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'member_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'member_level' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'signed_at' => [
                'type' => 'DATETIME',
                'null' => true,
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
        $this->forge->createTable('member');
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
