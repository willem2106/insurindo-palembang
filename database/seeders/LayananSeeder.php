<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Main
        DB::table('layanan_main')->insert([
            'jenis' => 'Liquid Cargo',
            'gambar_path' => 'uploads/layanan/Main/[layanan] Main-1.png',
        ]);
        DB::table('layanan_main')->insert([
            'jenis' => 'Bulk Cargo',
            'gambar_path' => 'uploads/layanan/Main/[layanan] Main-2.png',
        ]);
        DB::table('layanan_main')->insert([
            'jenis' => 'Marine Survey',
            'gambar_path' => 'uploads/layanan/Main/[layanan] Main-3.png',
        ]);
        DB::table('layanan_main')->insert([
            'jenis' => 'Sampling',
            'gambar_path' => 'uploads/layanan/Main/[layanan] Main-4.png',
        ]);
        DB::table('layanan_main')->insert([
            'jenis' => 'Fumigation',
            'gambar_path' => 'uploads/layanan/Main/[layanan] Main-5.png',
        ]);

        // Detail
        DB::table('layanan_detail')->insert([
            'id_main' => '1',
            'judul' => 'Loading Port',
            'konten' => '-Pengecekan/pemeriksaan kapal sebelum Pemuatan
        -Periksa tangki kapal untuk memenuhi spesifikasi kontrak
        -Mengontrol & mengawasi aktivitas pantai selama pemuatan
        -Mengontrol & mengawasi kegiatan pantai selama pemuatan
        -Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan
        -Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien
        -Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);

        DB::table('layanan_detail')->insert([
            'id_main' => '2',
            'judul' => 'Loading Port',
            'konten' => '-Pengecekan/pemeriksaan kapal sebelum Pemuatan
        -Periksa tangki kapal untuk memenuhi spesifikasi kontrak
        -Mengontrol & mengawasi aktivitas pantai selama pemuatan
        -Mengontrol & mengawasi kegiatan pantai selama pemuatan
        -Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan
        -Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien
        -Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);

        DB::table('layanan_detail')->insert([
            'id_main' => '2',
            'judul' => 'Discharging Port',
            'konten' => '-Periksa/Inspeksi segel di kapal
        -Survei kondisi kargo
        -Mengukur jumlah barang di kapal sebelum dibongkar dengan melakukan sebuah draf survei
        -Memeriksa & mengukur jumlah kargo setelah bongkar muat
        -Pengambilan sampel untuk tujuan analisis sebagaimana tertulis dalam kontrak
        -Melakukan tindakan preventif yang diperlukan untuk menjamin hal tersebut',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);

        DB::table('layanan_detail')->insert([
            'id_main' => '3',
            'judul' => 'Loading Port',
            'konten' => '-Pengecekan/pemeriksaan kapal sebelum Pemuatan
        -Periksa tangki kapal untuk memenuhi spesifikasi kontrak
        -Mengontrol & mengawasi aktivitas pantai selama pemuatan
        -Mengontrol & mengawasi kegiatan pantai selama pemuatan
        -Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan
        -Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien
        -Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);

        DB::table('layanan_detail')->insert([
            'id_main' => '4',
            'judul' => 'Loading Port',
            'konten' => '-Pengecekan/pemeriksaan kapal sebelum Pemuatan
        -Periksa tangki kapal untuk memenuhi spesifikasi kontrak
        -Mengontrol & mengawasi aktivitas pantai selama pemuatan
        -Mengontrol & mengawasi kegiatan pantai selama pemuatan
        -Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan
        -Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien
        -Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);

        DB::table('layanan_detail')->insert([
            'id_main' => '5',
            'judul' => 'Loading Port',
            'konten' => '-Pengecekan/pemeriksaan kapal sebelum Pemuatan
        -Periksa tangki kapal untuk memenuhi spesifikasi kontrak
        -Mengontrol & mengawasi aktivitas pantai selama pemuatan
        -Mengontrol & mengawasi kegiatan pantai selama pemuatan
        -Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan
        -Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien
        -Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai',
            'gambar_path' => 'uploads/layanan/Detail/[layanan] Detail-1.png',
        ]);
    }
}
