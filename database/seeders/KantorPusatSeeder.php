<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KantorPusatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kantor_pusat')->insert([
            'keterangan' => 'Alamat
Gedung B&G Tower Lt. 11 Jl. Putri Hijau No. 10 Medan, Kelurahan Kesawan, Kecamatan Medan Barat Kelurahan Kesawan, Kecamatan Medan Barat
Telepon
Telp : 62-61-80010033
Hunting
62-61-80010031
62-61-80010031
62-61-80010031
Fax
2-61-80010032
62-61-80010037
E-mail
E-mail : contact@insurindo.com',
            'gambar_path' => 'uploads/unit/KantorPusat/[unit] KantorPusat-1.png'
        ]);
    }
}
