@extends('user.layout.main')

@section('content')
@section('content')
    {{-- <div class="pageWrapper">
    <div class="headerBlue mx-auto">
        Unit
    </div> --}}
    <h2 class="text-center pt-4"> <b>Unit</b> </h2>
    <h2 class="text-center pt-4">Kantor Cabang</h2>
    {{-- <div class="pageWrapper"> --}}
    <br>
    <div class="container">
        <div class="row">
          <div class="col border d-flex align-items-center justify-content-center"><b> Nama Kantor</b></div>
          <div class="col border d-flex align-items-center justify-content-center"><b>Alamat</b></div>
          <div class="col border d-flex align-items-center justify-content-center"><b>No Telepon</b></div>
          <div class="col border d-flex align-items-center justify-content-center"><b>Email</b></div>
        </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col border"><b> Nama Kantor</b></div>
            <div class="col border"><b>Alamat</b></div>
            <div class="col border"><b>No Telepon</b></div>
            <div class="col border"><b>Email</b></div>
        </div> --}}
        @foreach ($cabang as $c)
            <div class="row">
                <div class="col border d-flex align-items-center justify-content-center">{{ $c->nama }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $c->alamat }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $c->telepon }}</div>
                <div class="col border d-flex align-items-center justify-content-centerr">{{ $c->email }}</div>
            </div>
        @endforeach
    </div>
@endsection
