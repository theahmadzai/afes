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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito|Lato|Open+Sans|Roboto:400,400i,500,500i,700&display=swap">

    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="wrapper" id="app">

        @if(Auth::check() && !Auth::user()->hasVerifiedEmail())
            <div class="alert alert-warning">
                Please verify, your email address! <a href="{{ route('verification.resend') }}">resend verification email</a>
            </div>
        @endif

        @include('partials.header')

        @include('partials.navbar')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
