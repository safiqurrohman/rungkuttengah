<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


</head>

<body style="background-color:rgb(255, 255, 255)">
    <div id="app">

        <div class="sidebar d-none d-md-block">
            <div class="d-block text-center text-white mb-3 mt-3" style="font-size: 24px;">
                <img src="{{ asset('assets/img/unnamed.png') }}" alt="logo temprina" class="img-fluid" style="width: 140px">
                <p style="font-size: 15px; color:rgb(185, 185, 185)">Human Machine Interface </p>
                <div class="mt-2">
                    <i class="bi bi-person" style="font-size: 3rem; height: 20px"></i>
                    <p style="font-size: 17px; margin-top: -12px">{{Auth::user()->role}}</p>
                </div>
                <div style="border-bottom: 1px solid #FFFFFF; width: 90%; margin: 0 auto; margin-bottom: 10px"></div>
            </div>
            <div class="menu px-2">
                @if(Auth::user()->role == 'admin')
                <a href="{{ route('dashboard')}}" class="submenu my-1 {{ request()->routeIs('dashboard') ? 'btn-onclik' : 'btn-outline-light'}}">
                    Dashboard
                </a>
                <a href="{{ route('pekerjaan')}}" class="submenu my-1 {{ request()->routeIs('pekerjaan') ? 'btn-onclik' : 'btn-outline-light'}}">
                    Pekerjaan
                </a>
               
                <a href="{{ route('karyawan')}}" class="submenu my-1 {{ request()->routeIs('karyawan') ? 'btn-onclik' : 'btn-outline-light'}}">
                    Karyawan
                </a>
                <a href="{{ route('laporan')}}" class="submenu my-1 {{ request()->routeIs('laporan') ? 'btn-onclik' : 'btn-outline-light'}}">
                    Laporan
                </a>
                @endif

                @if(Auth::user()->role == 'operator')
                <a class="d-flex" style="justify-content: center">
                    {{Auth::user()->name}}
                </a>
                <a class="d-flex" style="justify-content: center">
                    {{Auth::user()->email}}
                </a>
                @endif

                <div class="d-flex" style="width: 100%; height: 100px; justify-content: center; align-items: flex-end; margin-left: -10px">
                    <a class="submenu" href="{{ route('logout') }}" style="background-color: white; color: #000000; font-weight: bold"
                        onclick="event.preventDefault(); document.getElementById('logout').submit();">
                        <i class="bi bi-box-arrow-left" style="font-size: 1rem;"></i> Logout
                    </a> 

                </div>
                <form id="logout" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <nav class="navbar navbar-light bg-light shadow-sm fixed-top d-block d-md-none">
            <div class="container-fluid d-flex align-items-center">
                <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                    ☰
                </button>
            </div>
        </nav>

        <!-- navbar top ----------------- -->
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm d-flex align-items-center fixed-top">
            <div class="container-fluid">
                <button class="btn btn-secondary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                    ☰
                </button>

                <ul class="navbar-nav ms-auto" >
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="link nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endif
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }} - {{Auth::user()->role}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav> -->

        <!-- Sidebar untuk HP (Menggunakan offcanvas) -->
        <div class="offcanvas offcanvas-sart d-md-none" id="mobileSidebar">
            <div class="offcanvas-header bg-secondary text-white">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body bg-secondary">
                <a href="{{ route('pekerjaan')}}" class="btn d-block text-white my-1 {{ request()->routeIs('pekerjaan') ? 'btn-primary' : 'btn-outline-light'}}">
                    Beranda
                </a>
                {{-- @if(Auth::User()->role == 'admin')
                <a href="{{ route('user')}}" class="btn d-block text-white my-1 {{ request()->routeIs('user') ? 'btn-primary' : 'btn-outline-light'}}">User</a>
                @endif
                <a href="{{ route('custemer')}}" class="btn d-block text-white my-1 {{ request()->routeIs('custemer') ? 'btn-primary' : 'btn-outline-light'}}">Customer</a>
                @if(Auth::User()->role == 'admin')
                <a href="{{ route('treatment')}}" class="btn d-block text-white my-1 {{ request()->routeIs('treatment') ? 'btn-primary' : 'btn-outline-light'}}">Treatment</a>
                @endif
                <a href="{{ route('transaksi')}}" class="btn d-block text-white my-1 {{ request()->routeIs('transaksi') ? 'btn-primary' : 'btn-outline-light'}}">Transaksi</a>
                <a href="{{ route('laporan')}}" class="btn d-block text-white my-1 {{ request()->routeIs('laporan') ? 'btn-primary' : 'btn-outline-light'}}">Laporan</a>
                <a href="{{ route('gaji')}}" class="btn d-block text-white my-1 {{ request()->routeIs('gaji') ? 'btn-primary' : 'btn-outline-light'}}">Gaji</a>
                <a class="btn d-block text-white my-1 btn-outline-light" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout').submit();">
                    Logout
                </a> --}}
                <form id="logout" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Konten Utama -->
        <div class="content">
            <main >
                {{ $slot }}
            </main>
        </div>
    </div>
</body>


</html>