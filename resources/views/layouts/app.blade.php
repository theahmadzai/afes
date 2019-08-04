<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'AFES') }}</title>

    <link rel="icon" href="/img/logo.png">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="{{ config('app.name', 'Laravel') }} Logo" width="64" height="64">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/about') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/about/chairman-message') }}">Chairman's Message</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/about/organizational-strategy') }}">Organizational Strategy</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/about/board-of-directors') }}">Board Of Directors</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/about/statutes-and-by-laws') }}">Statutes And By-Laws</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/membership') }}">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/jobs') }}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/donate') }}">Donate</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h5>Address</h5>
                        <p class="mb-3 text-muted">
                            House# 236, Behind District 4 Municipality Office 5 th Street, <br>
                            40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001, <br>
                            Phone: +93 771 251 253
                        </p>
                    </div>
                    <div class="col">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Business</a></li>
                            <li><a class="text-muted" href="#">Education</a></li>
                            <li><a class="text-muted" href="#">Government</a></li>
                            <li><a class="text-muted" href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <img src="/img/origional.png" alt="AFES">
                        {{-- <small class="d-block mb-3 text-muted">&copy; 2017-2019</small> --}}
                    </div>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
