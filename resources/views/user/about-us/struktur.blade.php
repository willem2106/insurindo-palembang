@extends('user.layout.main')

@section('content')
    <div class="col text-center">
        <h2 class="text-center pt-4"><b>Struktur Organisasi </b></h2>
    </div>
        <h4 class="text-center pt-5"> Departemen atau Divisi dari <strong class="cBlue">"Insurindo Palembang"</strong> </h4>
        @foreach ($organisasi as $org)
            <br>
            {{-- <img src="" width="500" height="500" alt=""> --}}
            <img src="{{ asset($org->gambar_path) }}" class="rounded mx-auto d-block" alt="...">
        @endforeach
    </div>
    </div>
    </div>
    </div>
@endsection
