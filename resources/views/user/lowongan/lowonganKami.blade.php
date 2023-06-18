@extends('user.layout.main')

@section('content')
    <br>
        <div class="col text-center">
            <h2> <b> Lowongan </b></h2>
            <div class="container text-center">
                <h4 class="text-center pt-5"> Lowongan yang tersedia di  <strong class="cBlue">"Insurindo Palembang"</strong> </h4>
                <br>
                <div class="row">

                    <div class="container text-center">
                        <div class="container-fluid">
                        <div class="row d-flex justify-content-center">
                            @foreach ($karir as $k)
                                <div class="col-md-4">
                                    <div class="card" style="width: 18rem;">
                                        <div class="container text-center">
                                            <div class="card-body">
                                                <h5 class="card-title"> <b>{{ $k->karir }}</b> </h5>
                                                <p class="card-text">
                                                <ul>

                                                    Kategori : {{ $k->kategori }}

                                                </ul>
                                                <ul>

                                                    Tipe : {{ $k->tipe }}

                                                </ul>
                                                <ul>

                                                    Lokasi : {{ $k->lokasi }}

                                                </ul>
                                                </p>
                                                <a href="/lowongan/{{ $k->id }}" class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    @endsection
