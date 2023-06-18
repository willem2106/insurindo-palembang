@extends('user.layout.main')

@section('content')
@section('content')

    <h2 class="text-center pt-4"> <b>Unit</b> </h2>
    <h2 class="text-center pt-4"> Unit Laboratorium Analisis dan Pengujian </h2>
    {{-- <div class="pageWrapper"> --}}
    <br>
    <div class="container">
        <div class="row">
            <div class="col border d-flex align-items-center justify-content-center"><b>Nama Kantor</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>Alamat</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>No Telepon</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>Email</b></div>
        </div>
        @foreach ($lab as $l)
            <div class="row">
                <div class="col border d-flex align-items-center justify-content-center">{{ $l->nama }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $l->alamat }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $l->telepon }}</div>
                <div class="col border d-flex align-items-center justify-content-center">{{ $l->email }}</div>
            </div>
        @endforeach
    </div>

@endsection
