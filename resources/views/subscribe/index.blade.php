@extends('layouts.app')

@section('title', 'Subscribe')

@section('content')

    @component('partials.head')
        Subscribe for Newsletter
    @endcomponent

    <div class="container">

        <div class="row py-5">

            <div class="col-md-6">

                <form method="POST" action="{{ url()->current() }}" novalidate>
                    @csrf
                    @recaptcha

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                        @error('first_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="last_name">Subject</label>
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name">
                        @error('last_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                        @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Subscribe</Button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
