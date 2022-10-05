<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HotelSettingsAdd extends Migration
{
    public function up()
    {

        $fields = [
            'setting_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'site_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'site_description' => [
                'type'       => 'VARCHAR',
                'constraint' => '600',
                'null' => true,
            ],
            'contact_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'contact_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'contact_email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'contact_address' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'small_header_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'square_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'long_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'login_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'register_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'other_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ]
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('setting_id', true);
        $this->forge->createTable('settings');
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
