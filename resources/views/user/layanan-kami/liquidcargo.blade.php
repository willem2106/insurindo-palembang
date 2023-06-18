@extends('user.layout.main')

@section('content')
    {{-- <div class="pageWrapper">
        <div class="headerBlue mx-auto">
            Unit
        </div> --}}
            {{-- <div class="heading" style="background: #E3E3E3; padding-top:10px; padding-bottom:10px">
                <div style="padding-left:60px">
                    <h5>Marine Surveyor</h5>
                </div> --}}
            <div style="padding-left:60px">
                <a href="/layanan-kami" style="text-decoration: none;"> Layanan Kami </a> / liquid Cargo
            </div>
        </div>
        <h2 class="text-center pt-4"><b>Liquid Cargo</b></h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('img/layout/foto1.png')}}" width="500" height="250" alt="">
                </div>
                <div class="col">

                    <ul>
                      <b>Loading Port</b>
                        <li>
                            Pengecekan/pemeriksaan kapal sebelum Pemuatan
                          </li>
                          <li>
                            Periksa tangki kapal untuk memenuhi spesifikasi kontrak.
                          </li>
                          <li>
                            Mengontrol & mengawasi aktivitas pantai selama pemuatan
                          </li>
                          <li>
                            Mengontrol & mengawasi kegiatan pantai selama pemuatan
                          </li>
                          <li>
                            Mengukur/membunyikan shiptank dan shore tank setelah selesai pemuatan.
                          </li>
                          <li>
                            Pengambilan sampel untuk keperluan analisis sesuai kontrak dan spesifikasi yang dibutuhkan oleh klien.
                          </li>
                          <li>
                            Melakukan tindakan preventif yang diperlukan untuk mengurangi kelangkaan  as ditentukan dalam kontrak selama pemuatan dan penyegelan yang sesuai.
                          </li>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('img/layout/foto1.png')}}" width="500" height="250" alt="">
                        </div>
                        <div class="col">


                            <ul>
                              <b>Discharging Port </b>
                                <li>
                                    Memeriksa jumlah segel & pengukur di kapal sebelum dibuang.
                                  </li>
                                  <li>
                                    Pengambilan sampel untuk tujuan analisis sebagaimana ditentukan dalam kontrak klien.
                                  </li>
                                  <li>
                                    Pengendalian & pengawasan situasi pantai sebelum, selama dan setelah pengosongan selesai.
                                  </li>
                                  <li>
                                    Pengendalian & pengawasan situasi pantai sebelum, selama dan setelah pengosongan selesai.
                                  </li>
                                  <li>
                                    Pemeriksaan tangki kapal untuk memastikan kekeringan tangki
                                  </li>
                                  <li>
                                    Mengukur sisa kargo di kapal dan untuk tangki pantai kuantitas
                        </div>

            </div>
    </div>
@endsection
