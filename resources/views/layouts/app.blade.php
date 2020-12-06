<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>START-UP</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/favi.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/startup">START-UP!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/penggerak">PENGGERAK START-UP!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/edukasi">EDUKASI</a>
                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              VALIDASI DATA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="http://127.0.0.1:8000/input">MENTOR START-UP!</a>
                              <a class="dropdown-item" href="http://127.0.0.1:8000/about">ABOUT US!</a>
                              <a class="dropdown-item" href="http://127.0.0.1:8000/upload">UPLOAD FOTO DOKUMENTASI</a>
                              <div class="dropdown-divider"></div>
                            </div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   FORM START-UP
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('login') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">{{ __('MASUK') }}</a>
                                    <form id="login-form" action="{{ route('login') }}">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                     @endif
                            
                                    @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">{{ __('DAFTAR') }}</a>
                                    <form id="register-form" action="{{ route('register') }}">
                                        @csrf
                                    </form>
                                    @endif
                                    <div class="dropdown-divider"></div>
                                </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Welcome, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
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
        </nav>

        <main class="py-4">
            @yield('formvalidation')
        </main>
    </div>
</body>
</html>
