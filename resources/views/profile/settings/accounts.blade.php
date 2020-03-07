@extends('layouts.profile')

@section('title', 'Accounts')

@section('profile-content')

    <div class="card">

        <div class="card-header">Email</div>

        <div class="card-body">

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-form-label col-md-4">Email Address</label>
                    <div class="col-md-8">
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? Auth::user()->email }}">
                        @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">Save</Button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    <div class="card mt-3">

        <div class="card-header">Connect Social Accounts</div>

        <div class="card-body">

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf
                @method('PUT')
                <input type="hidden" name="account" value="facebook">

                <div class="form-group row">
                    <label class="col-form-label col-md-4">Facebook</label>
                    <div class="col-md-8">
                        <label class="switch">
                            <input type="checkbox" name="link" {{ $identities['facebook'] ? 'checked' : ''}} onchange="this.form.submit();">
                            <span class="slider round"></span>
                        </label>
                        @error('facebook')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>
            </form>

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf
                @method('PUT')
                <input type="hidden" name="account" value="google">

                <div class="form-group row">
                    <label class="col-form-label col-md-4">Google</label>
                    <div class="col-md-8">
                        <label class="switch">
                            <input type="checkbox" name="link" {{ $identities['google'] ? 'checked' : ''}} onchange="this.form.submit();">
                            <span class="slider round"></span>
                        </label>
                        @error('google')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection
