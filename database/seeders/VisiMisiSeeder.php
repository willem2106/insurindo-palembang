<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // VISI
        DB::table('visi')->insert([
            'konten' => 'Menjadi Menjadi perusahaan perusahaan jasa survey yang Independent, Profesional dan Terpercaya',
        ]);

        // MISI
        DB::table('misi')->insert([
            'konten' => 'Menyelesaikan pekerjaan inspeksi dan pengujian terjadwal',
            'gambar_path' => 'uploads/tentang/Misi/[tentang] Misi-1.png'
        ]);
        DB::table('misi')->insert([
            'konten' => 'Menyelesaikan pekerjaan inspeksi dan pengujian terjadwal',
            'gambar_path' => 'uploads/tentang/Misi/[tentang] Misi-2.png'
        ]);
        DB::table('misi')->insert([
            'konten' => 'Menyelesaikan pekerjaan inspeksi dan pengujian terjadwal',
            'gambar_path' => 'uploads/tentang/Misi/[tentang] Misi-3.png'
        ]);
        DB::table('misi')->insert([
            'konten' => 'Menyelesaikan pekerjaan inspeksi dan pengujian terjadwal',
            'gambar_path' => 'uploads/tentang/Misi/[tentang] Misi-4.png'
        ]);
        DB::table('misi')->insert([
            'konten' => 'Menyelesaikan pekerjaan inspeksi dan pengujian terjadwal',
            'gambar_path' => 'uploads/tentang/Misi/[tentang] Misi-5.png'
        ]);
    }
}
