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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito|Lato|Open+Sans|Roboto:400,400i,500,500i,700&display=swap">

    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <main class="wrapper" id="app">

        @if(Auth::check() && !Auth::user()->hasVerifiedEmail())
            <div class="alert alert-warning m-0">
                Please verify, your email address! <a href="{{ route('verification.resend') }}">resend verification email</a>
            </div>
        @endif

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </main>

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Start of ChatBot (www.chatbot.com) code -->
    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "5e920e2f4d45020007b8c494";
        (function() {
            var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
        })();
    </script>
    <!-- End of ChatBot code -->
</body>
</html>
