<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KalibrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalibrasi')->insert([
            'nama' => 'Medan',
            'alamat' => 'Jl. Jenggal No.1 AB, Medan - 20152, Indonesia',
            'telepon' => '+62-61-4516783',
            'email' => 'contact@insurindo.com',
        ]);
    }
}
