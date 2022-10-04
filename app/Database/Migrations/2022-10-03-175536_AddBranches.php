<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBranches extends Migration
{
    public function up()
    {

        $fields = [
            'branch_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'branch_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'branch_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '600',
                'null' => true,
            ],
            'branch_zip' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'branch_lat' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'branch_lng' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ["active", "suspend", "blocked","deleted"],
                'default'    => "active",
            ],
           
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('branch_id', true);
        $this->forge->createTable('branches');
    }

    public function down()
    {
        $this->forge->dropTable('branches');
    }
}
