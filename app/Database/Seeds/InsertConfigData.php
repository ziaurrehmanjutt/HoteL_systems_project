<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertConfigData extends Seeder
{
    public function run()
    {
        $data = [
            'site_name' => 'Site Hotels',
            'login_logo'    => 'login_logo.png',
            'register_logo'    => 'register_logo.png',
            'other_logo'    => 'other_logo.png',
            'long_logo'    => 'long_logo.png',
            'square_logo'    => 'square_logo.png',
            'small_header_logo'    => 'small_header_logo.png',
            'contact_address'    => 'darth@theempire.com',
            'contact_email'    => 'darth@theempire.com',
            'contact_name'    => 'darth@theempire.com',
            'contact_number'    => 'darth@theempire.com',
            'site_description'    => 'darth@theempire.com',
        ];
        $this->db->table('settings')->insert($data);
    }
}
