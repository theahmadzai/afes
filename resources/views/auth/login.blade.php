@extends('layouts.app')

@section('title', 'Login')

@section('content')

    @component('partials.head')
        Login
    @endcomponent

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" novalidate>
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Login</button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            @endif
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <a href="{{ url('/login/facebook') }}" class="btn btn-outline-dark btn-block mb-2">
                                    <i class="fa fa-facebook text-left col-2"></i> Sign in with Facebook
                                </a>

                                <a href="{{ url('/login/google') }}" class="btn btn-outline-dark btn-block mb-2">
                                    <i class="fa fa-google text-left col-2"></i> Sign in with Google
                                </a>

                                <hr>

                                <p class="d-block text-center"><b>No account?</b> <a href="{{ url('/register') }}">Create One</a></p>

                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
