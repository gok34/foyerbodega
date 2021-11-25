<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,

            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
                'null' => false,
            ],
            'group' => [
                'type'           => 'INT',
                'constraint'     => 12,

                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'update_at_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'delete_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
