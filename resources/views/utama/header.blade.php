<!-- Spinner Start -->
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Jam Buka: Sen - Jum : 8.00 am - 9.00 pm, Minggu Tutup </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>dentcare@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>(021) 47861052</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="collapse navbar-collapse" id="navbarCollapse">
            @guest
                @if(Route::has('login'))
                <li class="navbar-nav ms-auto py-0">
                <a href="/home" class="nav-item nav-link ">Home</a></li>
                @endif
                @else
                @if (auth()->user()->level == 1)
                <li class="navbar-nav ms-auto py-0">
                <a href="/pasien" class="nav-item nav-link ">Pasien</a></li>
                
                @elseif (auth()->user()->level == 2)
                <li class="navbar-nav ms-auto py-0">
                <a href="/about" class="nav-item nav-link">Tentang Kami</a>
                <a href="/layanan" class="nav-item nav-link">Layanan</a>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu m-0">
                        <a href="/price" class="dropdown-item">Harga Paket</a>
                        <a href="/team" class="dropdown-item">Dokter Kami</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </li>
                <li class="navbar-nav ms-auto py-0">
                <a href="/kontak" class="nav-item nav-link">Kontak</a></li>
                
                @elseif (auth()->user()->level == 3)
                <li class="navbar-nav ms-auto py-0">
                <a href="/pasien" class="nav-item nav-link ">Pasien</a></li>
                @else
               @endif
               @endguest        
        </ul>
            <ul class="navbar-nav nav-pills ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link @yield('menuLogin')" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link @yield('menuRegister')" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
        </div>
    </nav>
    <!-- Navbar End -->