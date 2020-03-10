@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    @component('partials.head')
        Contact Us
    @endcomponent

    <div class="container-fluid">

        <div class="row p-4">

            <div class="col-12 p-5 bg-light">
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

        <div class="row px-4 pb-4">

            <div class="col-md-6 p-5 shadow">
                <div class="row border-bottom">
                    <div class="col-2 p-2 text-center">
                        <i class="fa fa-map-marker fa-2x"></i>
                    </div>
                    <div class="col-10 p-2">
                        <p>House# 236, Behind District 4 Municipality Office, 5 th Street, 40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001</p>
                    </div>
                </div>

                <div class="row border-bottom pt-4">
                    <div class="col-2 p-2 text-center">
                        <i class="fa fa-phone fa-2x"></i>
                    </div>
                    <div class="col-10 p-2">
                        <p>+93 771 251 253</p>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-2 p-2 text-center">
                        <i class="fa fa-envelope fa-2x"></i>
                    </div>
                    <div class="col-10 p-2">
                        <p>contact@afghanevaluation.af</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-0">
                <iframe style="border:0; width:100%; min-height:300px; height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.3034974807124!2d69.14740571454173!3d34.54587029900377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d16ee39bf810bd%3A0x7a6956ff2e20c5c7!2sAfghan%20Evaluation%20Society!5e0!3m2!1sen!2s!4v1583838323323!5m2!1sen!2s" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div>

    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
@endpush

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LfYwq8UAAAAAAW-MH32BTfFsAmaG1zV2dJNGjPk"></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
@endpush
