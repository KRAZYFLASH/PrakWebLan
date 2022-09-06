<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051076',
                'nama'    => 'Muhammad Fakhri',
                'alamat' => 'Jakarta',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051050',
                'nama'    => 'Joy Hans',
                'alamat' => 'Medan',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051075',
                'nama'    => 'Riyo Pratama',
                'alamat' => 'Lampung',
                'created_at'    => Time::now(),
            ]
        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
