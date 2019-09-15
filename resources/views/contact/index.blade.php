@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    @component('partials.head')
        Contact Us
    @endcomponent

    <div class="container">

        <div class="row py-5">

            <div class="col-md-4">

                <div class="shadow-lg p-3 mb-5 bg-white rounded text-muted p-5">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>House# 236, Behind District 4 Municipality Office, 5 th Street, 40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+93 771 251 253</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@afghanevaluation.af</p>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8">

                <form method="POST" action="{{ url()->current() }}" novalidate>
                    @csrf
                    @recaptcha

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Your Name">
                            @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Subject">
                        @error('subject')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="body">Your Message</label>
                        <textarea name="body" id="body" rows="5" class="form-control @error('body') is-invalid @enderror" placeholder="Message Text">{{ old('body') }}</textarea>
                        @error('body')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        <small class="form-text text-muted">
                            Message body should 100 to 1000 characters long.
                        </small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send Message</Button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <div id="leaflet-map"></div>

@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
@endpush

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LfYwq8UAAAAAAW-MH32BTfFsAmaG1zV2dJNGjPk"></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
@endpush
