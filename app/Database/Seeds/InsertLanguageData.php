<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertLanguageData extends Seeder
{
    public function run()
    {
        $data = [
            'language_name' => 'Urdu',
            'short_name'    => 'ur',
            'long_name'    => 'ur_PAK',
            'is_rtl'    => 1,
            'is_using'    => 0
        ];
        $this->db->table('local_languages')->insert($data);

        $data = [
            'language_name' => 'English',
            'short_name'    => 'en',
            'long_name'    => 'en_USA',
            'is_rtl'    => 0,
            'is_using'    => 1
        ];
        $this->db->table('local_languages')->insert($data);

        $data = [
            'language_name' => 'Arabic',
            'short_name'    => 'ar',
            'long_name'    => 'ar_KSA',
            'is_rtl'    => 1,
            'is_using'    => 0
        ];
        $this->db->table('local_languages')->insert($data);

        $data = [
            'language_name' => 'Hindi',
            'short_name'    => 'hi',
            'long_name'    => 'hi_IND',
            'is_rtl'    => 0,
            'is_using'    => 0
        ];
        $this->db->table('local_languages')->insert($data);
    }
}
