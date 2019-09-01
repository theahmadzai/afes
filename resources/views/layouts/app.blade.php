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
    <div class="wrapper" id="app">

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
