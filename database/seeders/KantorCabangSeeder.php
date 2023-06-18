<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KantorCabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kantor_cabang')->insert([
            'nama' => 'Belawan',
            'alamat' => 'Jl. Ciliwung No. 23, Belawan',
            'telepon' => '+62-61-6943454',
            'email' => 'belawan@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Kuala Tanjung',
            'alamat' => 'Jl. Accses Road Inalum Kuala Tanjung, Dusun Alai,  Desa Kuala Tanjung, Kec.Sei Suka, Batubara, Sumatera Utara',
            'telepon' => '+62-61-620538',
            'email' => 'kualatanjung@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Padang',
            'alamat' => 'Komplek Jondul Rawang Blok FF No. 1, Padang',
            'telepon' => '+62-751-61449',
            'email' => 'padang@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Dumai',
            'alamat' => 'Jl. Dumai Sei Pakning, Riau',
            'telepon' => '+62-765-7037800',
            'email' => 'dumai@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Palembang',
            'alamat' => 'Jl. Beringin No.10, Banyuasin',
            'telepon' => '+62-711-7537171',
            'email' => 'palembang@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Jambi',
            'alamat' => 'Jl. Marene Lr. Mawar, Jambi',
            'telepon' => '+62-81-16159078',
            'email' => 'jambi@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Jakarta',
            'alamat' => 'Jl. Alas Dermaga 112-113, Jakarta Utara',
            'telepon' => '+62-81-16083649',
            'email' => 'jakarta@insurindo.com',
        ]);
        DB::table('kantor_cabang')->insert([
            'nama' => 'Gresik',
            'alamat' => 'Jl. Ikan Bandeng Barat No. 4, Gresik',
            'telepon' => '+62-31-3985303',
            'email' => 'gresik@insurindo.com',
        ]);
    }
}
