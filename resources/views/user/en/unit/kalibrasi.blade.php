@extends('user.layout.main')

@section('content')
@section('content')


    <h2 class="text-center pt-4"> <b>Unit</b> </h2>
    <h4 class="text-center pt-4"> Service and Calibration Unit </h4>
    <br>
    <div class="container">
        <div class="row">
            <div class="col border d-flex align-items-center justify-content-center"><b>Office Name</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>Address</b></div>
            <div class="col border d-flex align-items-center justify-content-center"><b>Telephone</b></div>
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
