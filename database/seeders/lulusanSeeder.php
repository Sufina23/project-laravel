<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class lulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('lulusans')->insert([
            'nama' => 'Sufina',
            'jk' => 'Perempuan',
            'jurusan' => 'Teknik Informatika',
            'prodi' => 'Rekayasa Perangkat Lunak',
            'ipk' => '4.00',
            'tahun' => '2025'
        ]);
        
    }
}