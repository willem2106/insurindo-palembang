@extends('user.layout.main')

@section('content')
    <div class="heading" style="background: #E3E3E3; padding-top:10px; padding-bottom:10px">
        <div style="padding-left:60px">
            <h5>{{ $karir->karir }}</h5>
        </div>
        <div style="padding-left:60px">
            <a href="/lowongan" style="text-decoration: none;"> Lowongan </a> / Detail
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-start"> <b> Kategori Pekerjaan </b>: {{ $karir->kategori }} <br>
                    <b> Tipe Pekerjaan </b>: {{ $karir->tipe }} <br>
                    <b> Lokasi Pekerjaan</b>: {{ $karir->lokasi }}
                </p>
                <hr />
                <p class="text-start"><b>Keterangan</b><br>
                    {!! $karir->keterangan !!}
                </p>

                <p class="text-start"><b>Gaji/Upah</b><br>
                    {!! $karir->gaji !!}
                </p>

                <p class="text-start"><b>Syarat</b>
                    @foreach ($syarat as $s)
                        <ul>
                            <li>
                                {{ $s->syarat }}
                            </li>
                        </ul>
                    @endforeach
            </div>
            <div class="col">
                </p>
                <p class="text-start"><b>Cara Pendaftaran</b><br>
                    @foreach ($details as $d)
                        <ul>
                            <li>
                                {{ $d->pendaftaran }}
                            </li>
                        </ul>
                    @endforeach
            </div>
        </div>
    </div>


    </p>
@endsection
