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
                'NPM' => '2017051050',
                'nama'    => 'Joy HC Sinaga',
                'alamat'    => 'dibelakang FKIP',
                'created_at'    => Time::now(),
            ],
            [
                'NPM' => '201705105x',
                'nama'    => 'JHC Sidragon',
                'alamat'    => 'Madukoro Kost',
                'created_at'    => Time::now(),
            ],
            [
                'NPM' => '201705105y',
                'nama'    => 'Joy Sidragon',
                'alamat'    => 'Di Hatimu hahaha',
                'created_at'    => Time::now(),
            ],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
