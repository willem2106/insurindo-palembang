<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Main
        DB::table('karir_main')->insert([
            'karir' => 'Marine Surveyor',
            'kategori' => 'Kapal',
            'tipe' => 'Full Time',
            'lokasi' => 'Palembang, Medan',
            'keterangan' => 'Tugas seorang Marine Surveyor adalah melakukan pengkajian terhadap kesiapan kapal untuk melakukan suatu pola operasi secara obyektif dan dapat memberikan suatu rekomendasi apabila ditemukan suatu ketidaksesuaian berdasarkan ketentuan yang diikuti.
                    Marine Surveyor juga bertanggungjawab terhadap segala penilaian termasuk rekomendasi yang diberikan secara profesional dengan penuh integritas demi tercapainya tujuan penggunaan kapal termasuk keselamatan pelayaran.',
            'gaji' => 'Gaji yang didapat dari pekerjaan Marine Surveyor sekitar Rp.6.000.000,00-Rp.8.000.000,00
                    *Nb: gaji akan naik seiring kemampuan bekerja',
        ]);
        DB::table('karir_main')->insert([
            'karir' => 'Marine Surveyor',
            'kategori' => 'Kapal',
            'tipe' => 'Part Time',
            'lokasi' => 'Cilacap, Surabaya',
            'keterangan' => 'Tugas seorang Marine Surveyor adalah melakukan pengkajian terhadap kesiapan kapal untuk melakukan suatu pola operasi secara obyektif dan dapat memberikan suatu rekomendasi apabila ditemukan suatu ketidaksesuaian berdasarkan ketentuan yang diikuti.
                    Marine Surveyor juga bertanggungjawab terhadap segala penilaian termasuk rekomendasi yang diberikan secara profesional dengan penuh integritas demi tercapainya tujuan penggunaan kapal termasuk keselamatan pelayaran.',
            'gaji' => 'Gaji yang didapat dari pekerjaan Marine Surveyor sekitar Rp.3.000.000,00-Rp.5.000.000,00
                    *Nb: gaji akan naik seiring kemampuan bekerja',
        ]);

        for ($i = 1; $i <= 2; $i++) {
            // Detail Pendaftaran
            DB::table('karir_detail')->insert([
                'id_main' => $i,
                'pendaftaran' => 'Mengirimkan dokumen file seperti foto KTP, CV, foto surat sehat, foto surat bebas narkoba, dan skck',
            ]);
            DB::table('karir_detail')->insert([
                'id_main' => $i,
                'pendaftaran' => 'Dikirim ke email palembang@insurindo.com dengan Subject : Jabatan - Nama',
            ]);
            DB::table('karir_detail')->insert([
                'id_main' => $i,
                'pendaftaran' => 'Membawa dokumen seperti foto KTP, CV, foto surat sehat, foto surat bebas narkoba, dan skck',
            ]);
            DB::table('karir_detail')->insert([
                'id_main' => $i,
                'pendaftaran' => 'Datang langsung ke kantor Insurindo Palembang di Jl. Beringin No. 10, Banyuasin',
            ]);

            // Detail Syarat
            DB::table('karir_detail_syarat')->insert([
                'id_main' => $i,
                'syarat' => 'Lulusan D3/S1 semua jurusan dengan pengalaman 1-2 tahun atau lulusan SMA dengan pengalaman 5 tahun pada posisi Surveyor (Liquid Cargo/Draught/Palms Oils/Petroleum)',
            ]);
            DB::table('karir_detail_syarat')->insert([
                'id_main' => $i,
                'syarat' => 'Diutamakan memiliki sertifikat AISI',
            ]);
            DB::table('karir_detail_syarat')->insert([
                'id_main' => $i,
                'syarat' => 'Berbadan sehat dan berkelakuan baik (dibuktikan dengan surat sehat, surat bebas narkoba, dan skck)',
            ]);
            DB::table('karir_detail_syarat')->insert([
                'id_main' => $i,
                'syarat' => 'Diutamakan berdomisili di sekitar wilayah penempatan kerja',
            ]);
            DB::table('karir_detail_syarat')->insert([
                'id_main' => $i,
                'syarat' => 'Penempatan kerja wilayah: Palu, Cilacap, Surabaya, Medan, Dumai, Lampung, dan Bengkulu',
            ]);
        }
    }
}
