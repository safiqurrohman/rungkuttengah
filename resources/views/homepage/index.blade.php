<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beauty&CO') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />

<body>
    <div id="app">

        <!-- <header class="header d-flex align-items-center fixed-top"> -->
        <header class="navbar align-items-center navbar-expand-md navbar-light bg-secondary d-flex align-items-center fixed-top py-4">
            <div class="container">
                <b class="navbar-brand colo-default" style="font-size: 30px; font-weight: 800; ">
                    Beauty & CO
                </b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="container navbar-nav ms-auto">
                        <div class="col-12 ">
                            <a href="{{ route('home')}}" wire:navigate class="btn {{ request()->routeIs('home') ? 'btn-pink' : 'btn-outline-pink'}}">
                                Beranda
                            </a>

                            {{-- <a href="{{ route('user')}}" wire:navigate class="btn {{ request()->routeIs('user') ? 'btn-pink' : 'btn-outline-pink'}}">
                                User
                            </a>

                            <a href="{{ route('custemer')}}" wire:navigate class="btn {{ request()->routeIs('custemer') ? 'btn-pink' : 'btn-outline-pink'}}">
                                Custemer
                            </a>

                            <a href="{{ route('treatment')}}" wire:navigate class="btn {{ request()->routeIs('treatment') ? 'btn-pink' : 'btn-outline-pink'}}">
                                Treatment
                            </a>

                            <a href="{{ route('transaksi')}}" wire:navigate class="btn {{ request()->routeIs('transaksi') ? 'btn-pink' : 'btn-outline-pink'}}">
                                Transaksi
                            </a>

                            <a href="{{ route('laporan')}}" wire:navigate class="btn {{ request()->routeIs('laporan') ? 'btn-pink' : 'btn-outline-pink'}}">
                                Laporan
                            </a> --}}
                        </div>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <div>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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
                </div>
            </div>

        </header>

        <!-- </header> -->

        <main class="by-10 mt-100">

            {{ $slot }}
        </main>
    </div>


</body>

</html>