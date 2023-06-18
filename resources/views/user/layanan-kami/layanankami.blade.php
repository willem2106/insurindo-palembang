@extends('user.layout.main')

@section('content')
<br>
    <div class="col text-center">
        <h2><b>Layanan Kami</b></h2>

    </div>

    <div class="container text-center">
        <h4 class="text-center pt-5"> Layanan yang tersedia  <strong class="cBlue">"Insurindo Palembang"</strong> </h4>
        <div class="container">
            <div class="row">
                @foreach ($layanan as $l)
                    <div class="mt-4 col-4">
                        <div class="card">
                            <img src="{{ asset($l->gambar_path) }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h3><b>{{ $l->jenis }}</b></h3>
                                <a href="/layanan-kami/{{ $l->id }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
