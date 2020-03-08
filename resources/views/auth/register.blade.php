@extends('layouts.app')

@section('title', 'Create Account')

@section('content')

    @component('partials.head')
        Create Account
    @endcomponent

    <div class="container">

        <div class="row justify-content-center py-5">

            <div class="col-md-8">

                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf

                    <input type="hidden" name="avatar" value="{{ old('avatar') }}">
                    <input type="hidden" name="provider_name" value="{{ old('provider_name') }}">
                    <input type="hidden" name="provider_id" value="{{ old('provider_id') }}">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password'</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <a href="{{ url('/login/facebook') }}" class="btn btn-outline-dark btn-block mb-2">
                                    <i class="fa fa-facebook text-left col-2"></i>Sign up with Facebook
                                </a>

                                <a href="{{ url('/login/google') }}" class="btn btn-outline-dark btn-block mb-2">
                                    <i class="fa fa-google text-left col-2"></i>Sign up with Google
                                </a>

                                <hr>

                                <p class="d-block text-center"><b>Already have an account?</b> <a href="{{ url('/login') }}">Sign in</a></p>

                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
