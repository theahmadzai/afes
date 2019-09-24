@extends('layouts.profile')

@section('title', 'Security')

@section('profile-content')

    <div class="card">

        <div class="card-header">Password</div>

        <div class="card-body">

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

                <div class="form-group row">
                    <label for="current_password" class="col-form-label col-md-4">Current Password</label>
                    <div class="col-md-8">
                        <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" value="{{ old('current_password') }}">
                        @error('current_password')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-form-label col-md-4">New Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password_confirmation" class="col-form-label col-md-4">Re-type new Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">Change Password</Button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    <div class="card mt-3">

        <div class="card-header">Where You're Logged In</div>

        <div class="card-body">

            <div class="d-flex align-items-center">
                <i class="fa fa-globe fa-5x"></i>
                <div class="ml-3">
                    <p class="mb-0"><b>{{ Auth::user()->last_login_platform }} - {{ Auth::user()->last_login_location }}</b></p>
                    <p class="mb-0 text-muted">{{ Auth::user()->last_login_browser }} - {{ optional(Auth::user()->last_login_date)->diffForHumans() }}</p>
                    <p class="mb-0">{{ Auth::user()->last_login_device }} <small class="text-primary">({{ Auth::user()->last_login_ip }})</small></p>
                </div>
            </div>

        </div>

    </div>

@endsection
