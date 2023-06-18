@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href=""><img width="200" src="{{ asset('img/layout/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="en/about-us/sejarah">History Insurindo Palembang</a></li>
                            <li><a class="dropdown-item" href="en/about-us/visi-misi">Vision and Mision</a></li>
                            <li><a class="dropdown-item" href="en/about-us/struktur">organizational structure</a></li>
                        </ul>
                    </li>

                    <li class="nav-item me-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Unit
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="en/unit/kantor-pusat">Center Office</a></li>
                            <li><a class="dropdown-item" href="en/unit/kantor-cabang">Branch Office</a></li>
                            <li><a class="dropdown-item" href="en/unit/lab">Analysis and Testing Laboratory Unit</a></li>
                            <li><a class="dropdown-item" href="en/unit/kalibrasi">
                                Service and Calibration Unit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="/layanan-kami">Our Service</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="/lowongan">Vacancy</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="/kontak">Contact</a>
                    </li>
                    <li class="nav-item me-4">
                        <form class="d-flex" action="{{route('search')}}" method="GET">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search"
                                aria-describedby="addon-wrapping">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <script src="{{ asset('js/search.js') }}"></script>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item me-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            EN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../">IDN</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endsection
