<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/assets/src/assets/img/logo.png') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('home') }}" style="font-size: 14px !important" class="nav-link"> Insurindo
                        Palembang
                    </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            @if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'manage personal')
                <li class="menu active">
                    <a href="{{ route('home') }}" aria-expanded="true" class="dropdown-toggle">
                    @else
                <li class="menu">
                    <a href="{{ route('home') }}" aria-expanded="false" class="dropdown-toggle">
            @endif
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Home</span>
            </div>
            </a>
            </li>

            @if (Auth::user()->role != 0)

                {{-- TENTANG KAMI --}}
                @if (Route::currentRouteName() == 'tentang kami')
                    <li class="menu active">
                        <a href="{{ route('tentang kami') }}" aria-expanded="true" class="dropdown-toggle">
                        @else
                    <li class="menu">
                        <a href="{{ route('tentang kami') }}" aria-expanded="false" class="dropdown-toggle">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-alert-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <span>Tentang Kami</span>
                </div>
                </a>
                </li>

                {{-- UNIT --}}
                @if (Route::currentRouteName() == 'unit')
                    <li class="menu active">
                        <a href="{{ route('unit') }}" aria-expanded="true" class="dropdown-toggle">
                        @else
                    <li class="menu">
                        <a href="{{ route('unit') }}" aria-expanded="false" class="dropdown-toggle">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><path fill="currentColor" d="M208 96a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v8H96v-8a16 16 0 0 0-16-16H48a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h8v64h-8a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-8h64v8a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16h-8V96Zm-32-48h32v32h-32ZM48 48h32v15.9a.51.51 0 0 0 0 .2V80H48Zm32 160H48v-32h32v15.9a.51.51 0 0 0 0 .2V208Zm128 0h-32v-32h32Zm-24-48h-8a16 16 0 0 0-16 16v8H96v-8a16 16 0 0 0-16-16h-8V96h8a16 16 0 0 0 16-16v-8h64v8a16 16 0 0 0 16 16h8Z"/></svg>
                    <span>Unit</span>
                </div>
                </a>
                </li>

                {{-- LAYANAN KAMI --}}
                @if (Route::currentRouteName() == 'layanan kami' || Route::currentRouteName() == 'detail layanan')
                    <li class="menu active">
                        <a href="{{ route('layanan kami') }}" aria-expanded="true" class="dropdown-toggle">
                        @else
                    <li class="menu">
                        <a href="{{ route('layanan kami') }}" aria-expanded="false" class="dropdown-toggle">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg>
                    <span>Layanan Kami</span>
                </div>
                </a>
                </li>

                {{-- KARIR --}}
                @if (Route::currentRouteName() == 'lowongan' || Route::currentRouteName() == 'detail lowongan')
                    <li class="menu active">
                        <a href="{{ route('lowongan') }}" aria-expanded="true" class="dropdown-toggle">
                        @else
                    <li class="menu">
                        <a href="{{ route('lowongan') }}" aria-expanded="false" class="dropdown-toggle">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><path fill="currentColor" d="M216 56h-40v-8a24 24 0 0 0-24-24h-48a24 24 0 0 0-24 24v8H40a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V72a16 16 0 0 0-16-16ZM96 48a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm120 24v41.61A184 184 0 0 1 128 136a184.07 184.07 0 0 1-88-22.38V72Zm0 128H40v-68.36A200.19 200.19 0 0 0 128 152a200.25 200.25 0 0 0 88-20.37V200Zm-112-88a8 8 0 0 1 8-8h32a8 8 0 0 1 0 16h-32a8 8 0 0 1-8-8Z"/></svg>
                    <span>Lowongan</span>
                </div>
                </a>
                </li>

            @endif
        </ul>

    </nav>

</div>
