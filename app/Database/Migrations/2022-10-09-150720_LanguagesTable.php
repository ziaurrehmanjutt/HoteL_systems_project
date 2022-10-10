<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LanguagesTable extends Migration
{
    public function up()
    {

        $fields = [
            'language_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'language_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'short_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'long_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'is_rtl' => [
                'type'       => 'INT',
                'constraint' => 1,
                'null' => true,
                'default'    => 1,
            ],
            'is_using' => [
                'type'       => 'INT',
                'constraint' => 1,
                'null' => true,
                'default'    => 0,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ["active", "suspend","deleted"],
                'default'    => "active",
            ],
           
        ];
        $this->forge->addField( $fields);
        $this->forge->addKey('language_id', true);
        $this->forge->createTable('local_languages');
    }

    public function down()
    {
        $this->forge->dropTable('local_languages');
    }
}
