@extends('user.layout.main')
@section('title')
Home
@endsection
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach($sliders as $item)
      <div class="carousel-item @if($loop->first == 1) active @endif">
            <img src="{{ asset($item->gambar_path) }}" height="750" width="1700" alt="..." style="filter: brightness(0.5);">
            <div class="top-left"><h1><B>{{$item->judul}}</B></h1>
                <br>
                @if ($item->judul == "Lowongan Pekerjaan")
                    <h2><a href="/lowongan" class="text-blue" style="text-decoration: none"></h2>Lihat Selengkapnya</a>
                @elseif ($item->judul == "Sejarah Insurindo")
                    <h2><a href="/about-us/sejarah" class="text-blue" style="text-decoration: none"></h2>Lihat Selengkapnya</a>
                @elseif ($item->judul == "Sejarah Insurindo")
                    <h2><a href="/about-us/sejarah" class="text-blue" style="text-decoration: none"></h2>Lihat Selengkapnya</a>

                    @else
                    <h2><a href="/about-us/visi-misi" class="text-blue" style="text-decoration: none"></h2>Lihat Selengkapnya</a>
                @endif
            </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
