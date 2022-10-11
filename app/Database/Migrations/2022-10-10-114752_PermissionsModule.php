<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PermissionsModule extends Migration
{
    public function up()
    {

        $fields = [
            'module_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'module_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'module_code' => [
                'type'       => 'INT',
                'constraint' => 8,
                'null' => true,
            ]
           
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('module_id', true);
        $this->forge->createTable('permissions_module');


        $fields = [
            'sub_module_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'parent_module_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'sub_module_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sub_module_code' => [
                'type'       => 'INT',
                'constraint' => 8,
                'null' => true,
            ]
           
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('sub_module_id', true);
        $this->forge->addKey('parent_module_id', false);
        $this->forge->createTable('permissions_sub_module');


        $fields = [
            'permission_module_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'parent_sub_module_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'permission_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'permission_code' => [
                'type'       => 'INT',
                'constraint' => 8,
                'null' => true,
            ]
           
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('permission_module_id', true);
        $this->forge->addKey('parent_sub_module_id', false);
        $this->forge->addKey('permission_code', false);
        $this->forge->createTable('permissions_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('permissions_module');
        $this->forge->dropTable('permissions_sub_module');
        $this->forge->dropTable('permissions_permissions');
    }
}
