@extends('user.layout.main')

@section('content')
    {{-- <div class="pageWrapper"> --}}

    <div class="col text-center">
        <h2 class="text-center pt-4"><b>Sejarah Insurindo Palembang </b></h2>
    </div>
    <h4 class="text-center pt-5"> Ketahui lebih banyak mengenai <strong class="cBlue">"Insurindo Palembang"</strong> </h4>

    <br>
    <div class="container">
        {{-- <div class="row">
                <div class="col">
                    <p class="text-start">
                        PT. Insurindo Inter Services (selanjutnya disebut "Insurindo") adalah perusahaan survei independen. Perusahaan ini didirikan pada tahun 1987. Tujuan kami adalah untuk memenuhi kebutuhan profesional jasa survei yang dibutuhkan dari industri bisnis Kelapa Sawit dan turunannya. Inilah alasan mengapa Insurindo memilikinya kantor pusat di Medan, Sumatera Utara karena konsentrasi keberadaan perkebunan kelapa sawit. Kami juga survei pertama perusahaan di Indonesia menjadi anggota FOSFA (Federation Asosiasi Minyak, Biji dan Lemak, London).
                    Karena pertumbuhan industri dan perdagangan, dan kelebihan beban kebutuhan/ permintaan dari produsen/ konsumen tidak hanya secara nasional tetapi telah pergi ke luar negeri untuk layanan terkait, Insurindo telah memperluas layanannya yang meliputi: Bongkar Muat Pengawasan (Bulk & Liquid), Survey Kondisi, Pengawasan terhadap Pemuatan dalam peti kemas, Pengambilan Sampel, Survei Kelautan, Fumigasi, Hama Kontrol, Layanan Kalibrasi, Laboratorium Analitik & Pengujian, Organisasi Keamanan yang Diakui (Kode ISPS), dll.
                    Insurindo telah menerapkan manajemen mutu yang didukung oleh peralatan standar dan staf berkualitas / profesional di mereka bidang masing-masing untuk memberikan pelayanan yang berkualitas secara sempurna dan tepat waktu untuk klien kami.
                    Setelah PT Insurindo Inter Service pusat yang berada di Medan sudah cukup lama berdiri maka kegiatannya semakin maju dan bertambah luas, 32 sehingga pada tahun 2004 didirikan cabang baru di Palembang yang beralamat di beralamat di Jl. Sabar Jl. Sabar Jaya, Lr Jaya, Lr Beringin No 10, Beringin No 10, Rt 017. Rw Rt 017. Rw 04, Kel Mar 04, Kel Mariana, Kec. Banyuasin 1, Kab. Banyuasin.
                    </p>
                </div>
                    <div class="col">
                        <img src="{{asset('img/layout/sejarah.png')}}" width="500" height="500" alt="">

                    </div>
                </div>
            </div> --}}

        @foreach ($sejarah as $s)
            <p class="text-center">{{ $s->konten }}</p>
            <div class="col text-center">
                @if (Str::contains($s->gambar_path, ['.png', '.jpg', '.jpeg']))
                    <img src="{{ asset($s->gambar_path) }}" width="1300" height="400" alt="">
                @elseif (Str::contains($s->gambar_path, ['.mp4']))
                    <video width="50%" height="auto" controls>
                        <source src="{{ asset($s->gambar_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
            </div>
            <br>
        @endforeach

    </div>
@endsection
