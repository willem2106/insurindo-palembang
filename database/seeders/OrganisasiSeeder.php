<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisasi')->insert([
            'gambar_path' => 'uploads/tentang/Organisasi/[tentang] Organisasi-1.png'
        ]);
    }
}
