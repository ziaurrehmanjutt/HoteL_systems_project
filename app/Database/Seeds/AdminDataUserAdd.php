<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminDataUserAdd extends Seeder
{
    public function run()
    {
        $data = [
            'first_name' => 'Admin ',
            'last_name'    => 'Admin',
            'user_email'    => 'admin@admin.com',
            'user_password'    => md5("admin123"),
            'user_type'    => 'super_admin'
        ];
        $this->db->table('users')->insert($data);
    }
}
