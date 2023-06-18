<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratoriumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratorium')->insert([
            'nama' => 'Medan',
            'alamat' => 'Jl. Jenggal No.1 AB, Medan - 20152, Indonesia',
            'telepon' => '+62-61-4516783',
            'email' => 'indokem@insurindo.com',
        ]);
        DB::table('laboratorium')->insert([
            'nama' => 'Dumai',
            'alamat' => 'Jl. Yos Sudarso No 117 Dumai',
            'telepon' => '+62-81-16044744',
            'email' => 'indokem.dumai@insurindo.com',
        ]);
    }
}
