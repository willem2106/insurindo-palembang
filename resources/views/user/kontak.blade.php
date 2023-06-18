@extends('user.layout.main')

@section('content')
@section('content')
    <div class="pageWrapper">


        <div class="col text-center">
          <h2><b>Kontak</b></h2>
          <p class="mt-4">Kontak<strong class="cBlue">"Insurindo Palembang"</strong> </p>
          <div class="container">
            <div class="row">
                <div class="col">

                      <div>
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset('img/layout/kontak1.png')}}" class="img-fluid rounded-start" width="140" height="10" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><p class="text-start">Location</p></h5>
                              <p class="text-start">Jl. Beringin No. 10, Banyuasin</p>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset('img/layout/kontak2.png')}}" class="img-fluid rounded-start" width="140" height="10" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><p class="text-start">Email</p></h5>
                              <p class="text-start">palembang@insurindo.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset('img/layout/kontak3.png')}}" class="img-fluid rounded-start" width="140" height="10" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><p class="text-start">Telepon</p></h5>
                              <p class="text-start">
                                    +62-7117537171
                                 <br>
                                    08116041092
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col">

                  <a href="https://goo.gl/maps/1WA17szRMVzdW9HN9">
                  <img src="{{asset('img/layout/map.png')}}" width="500" height="500" alt="">
      </div>
  </div>
</div>
</div>
      @endsection
