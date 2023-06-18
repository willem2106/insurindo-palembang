<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarah')->insert([
            'konten' => 'PT. Insurindo Inter Services (selanjutnya disebut "Insurindo") adalah perusahaan survei independen. Perusahaan ini didirikan pada tahun 1987. Tujuan kami adalah untuk memenuhi kebutuhan profesional jasa survei yang dibutuhkan dari industri bisnis Kelapa Sawit dan turunannya. Inilah alasan mengapa Insurindo memilikinya kantor pusat di Medan, Sumatera Utara karena konsentrasi keberadaan perkebunan kelapa sawit. Kami juga survei pertama perusahaan di Indonesia menjadi anggota FOSFA (Federation Asosiasi Minyak, Biji dan Lemak, London).',
            'gambar_path' => 'uploads/tentang/Sejarah/[tentang] Sejarah-1.png'
        ]);

        DB::table('sejarah')->insert([
            'konten' => 'Karena pertumbuhan industri dan perdagangan, dan kelebihan beban kebutuhan/ permintaan dari produsen/ konsumen tidak hanya secara nasional tetapi telah pergi ke luar negeri untuk layanan terkait, Insurindo telah memperluas layanannya yang meliputi: Bongkar Muat Pengawasan (Bulk & Liquid), Survey Kondisi, Pengawasan terhadap Pemuatan dalam peti kemas, Pengambilan Sampel, Survei Kelautan, Fumigasi, Hama Kontrol, Layanan Kalibrasi, Laboratorium Analitik & Pengujian, Organisasi Keamanan yang Diakui (Kode ISPS), dll.',
            'gambar_path' => 'uploads/tentang/Sejarah/[tentang] Sejarah-1.png'
        ]);
    }
}
