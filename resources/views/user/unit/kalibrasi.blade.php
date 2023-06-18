@extends('user.layout.main')

@section('content')
@section('content')


    <h2 class="text-center pt-4"> <b>Unit</b> </h2>
    <h4 class="text-center pt-4"> Unit Layanan dan Kalibrasi </h4>
    <br>
    <div class="container">
        <div class="row">
            <div class="col border d-flex align-items-center justify-content-center"><b>Nama Kantor</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>Alamat</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>No Telepon</b></div>
            <div class="col border d-flex align-items-center justify-content-center">
                <b>Email</b>
            </div>
        </div>
        @foreach ($kalibrasi as $kl)
            <div class="row">
                <div class="col border d-flex align-items-center justify-content-center">{{ $kl->nama }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $kl->alamat }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $kl->telepon }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $kl->email }}</div>
            </div>
    </div>
    @endforeach
@endsection
