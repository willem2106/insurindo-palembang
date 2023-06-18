@extends('user.layout.main')

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        width: 25px;
    }
</style>

@section('content')
    <br>
    {{-- <div class="pageWrapper"> --}}

    <div class="col text-center">
        <h2><b>Vision and Mision</b></h2>

    </div>


    <h4 class="text-center pt-5">Vision from <strong class="cBlue">“Insurindo Palembang”</strong></h4>
    <div class="col-lg-8 mt-4 mx-auto border">
        @foreach ($visi as $v)
            <p class="text-center pt-2">
                {{ $v->konten }}
            </p>
        @endforeach
    </div>

    <h4 class="text-center pt-5">Mission from <strong class="cBlue">“Insurindo Palembang”</strong></h4>
    <div class="container" style="padding-top: 30px">
        <div class="row mw-10">
            @foreach ($misi as $m)
                <div class="col" style="padding-bottom: 30px">
                    <div class="card-body border border-dark" style="min-height: 327px; width:220px">
                        <div align="center">
                            <img src="{{ asset($m->gambar_path) }}" style="height: 327px; width: 170px">
                        </div>
                        <p class="card-text" style="text-align: center">
                            {{ $m->konten }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
@endsection
