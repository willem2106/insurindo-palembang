@section('footer')
{{-- <hr/> --}}

<style>
  .container p-4{
    position: absolute;
    width: 100%; /* Menyesuaikan lebar kontainer */
  }

</style>
<br>
<footer class="text-center text-white" style="background-color: #fdfdfd">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a href="https://www.fosfa.org/">
          <img src="{{asset('img/layout/fosfa.png')}}" class="img-fluid" >
        </a>
        <a href="https://www.gafta.com/">
          <img src="{{asset('img/layout/gafta.png')}}" class="img-fluid" >
        </a>
        <a href="http://aisi.info/">
          <img src="{{asset('img/layout/aisi.png')}}" class="img-fluid" >
        </a>
        <a href="http://www.karantina.deptan.go.id/">
          <img src="{{asset('img/layout/kan.png')}}" class="img-fluid" >
        </a>
        <a href="https://aspphami.or.id/">
          <img src="{{asset('img/layout/asp.png')}}" class="img-fluid" >
        </a>
      </section>
    </div>
{{-- </footer> --}}

  <div style="background-color: #002F6F">
  <footer class="bg-primary text-center text-lg-start text-white">

    <div class="container p-4" >

      <div class="row my-4">

        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 170px; height: 170px;">
            <img src="{{asset('img/layout/logo1.png')}}" height="70px" alt=""
                 loading="lazy" />
          </div>

          <p class="text-center">
            <p class="text-justify">
            @lang('Insurindo is an independent survey company aiming to meet the professional needs of survey services required from the palm oil business industry and its derivatives')

            </p>


        </div>


        <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="float:inherit">
          <h5 class="text-uppercase mb-4">Fiture </h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="/" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>Home</a>
            </li>
            <li class="mb-2">
              <a href="/about-us/sejarah" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>About Us</a>
            </li>
            <li class="mb-2">
              <a href="/unit/kantor-pusat" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>Unit</a>
            </li>
            <li class="mb-2">
              <a href="/layanan-kami" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>Our Services</a>
            </li>
            <li class="mb-2">
              <a href="/lowongan" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>Vacancy</a>
            </li>
            <li class="mb-2">
              <a href="/kontak" class="text-white" style="text-decoration: none"><i class="fas fa-atom pe-3"></i>Contact</a>
            </li>
          </ul>
        </div>


        <div class="col-lg-4 col-md-6 mb-4 mb-md-0-centered" style="position: ">
          <h5 class="text-uppercase mb-4">Contact </h5>


          <ul class="list-unstyled">
            <li class="mb-2">
              <i class="fas fa-map-marker-alt pe-3"></i>Jl. Beringin No.10, Banyuasin
            </li>
            <li class="mb-2">
              <i class="fas  fa-envelope pe-3"></i>palembang@insurindo.com
            </li>
            <li class="mb-2">
              <i class="fas fa-phone pe-3"></i>62-711-7537171 / 08116041092
            </li>


          </ul>
          </p>
          </div>
      </div>
    </div>


    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      @ Copyright by PT Insurindo Palembang
    </div>

  </footer>

@endsection
