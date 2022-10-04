<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {

        $fields = [
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'user_email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'user_password' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ["active", "suspend", "blocked","deleted"],
                'default'    => "active",
            ],
            'user_branch' => [
                'type'       => 'ENUM',
                'null' => true,
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'user_type' => [
                'type'       => 'ENUM',
                'constraint' => ["super_admin", "branch_admin", "branch_user"],
                'default'    => "branch_user",
            ],
            'forget_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
