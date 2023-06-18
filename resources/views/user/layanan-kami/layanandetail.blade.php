@extends('user.layout.main')

@section('content')
    {{-- <div class="heading" style="background: #E3E3E3; padding-top:10px; padding-bottom:10px"> --}}
        <div style="padding-left:60px">
            <h5>Marine Surveyor</h5>
        </div>
        <div style="padding-left:60px">
            <a href="/layanan-kami" style="text-decoration: none;"> Layanan Kami </a> / {{ $layanan->jenis }}
        </div>
    </div>
    <hr/>
    <h2 class="text-center pt-4"><b>{{ $layanan->jenis }}</b></h2>
    <div class="container">
        @foreach ($detail as $d)
            <div class="row">
                <div class="col">
                    <img src="{{ asset($d->gambar_path) }}" width="500" height="500" alt="">
                </div>
                <div class="col">
                    <b>{{ $d->judul }}</b>
                    <p>{!! nl2br($d->konten) !!}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
