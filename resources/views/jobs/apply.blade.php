@extends('layouts.app')

@section('title', 'Apply')

@section('content')

    @component('partials.head')
        Application Form
    @endcomponent

    <div class="container-fluid">

        <div class="row p-0 px-2 py-4">

            <div class="col-md-8">

                <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    @recaptcha

                    <div class="form-group row">
                        <label for="first_name" class="col-form-label col-md-2">First Name</label>
                        <div class="col-md-8">
                            <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                            @error('first_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last_name" class="col-form-label col-md-2">Last Name</label>
                        <div class="col-md-8">
                            <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
                            @error('last_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-form-label col-md-2">Gender</label>
                        <div class="col-md-8">
                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option {{ old('gender') == 'Male' ? 'Selected' : '' }}>Male</option>
                                <option {{ old('gender') == 'Female' ? 'Selected' : '' }}>Female</option>
                            </select>
                            @error('gender')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="marital_status" class="col-form-label col-md-2">Marital Status</label>
                        <div class="col-md-8">
                            <select name="marital_status" id="marital_status" class="form-control @error('marital_status') is-invalid @enderror">
                                <option {{ old('marital_status') == 'Single' ? 'Selected' : '' }}>Single</option>
                                <option {{ old('marital_status') == 'Married' ? 'Selected' : '' }}>Married</option>
                                <option {{ old('marital_status') == 'Widowed' ? 'Selected' : '' }}>Widowed</option>
                                <option {{ old('marital_status') == 'Separated' ? 'Selected' : '' }}>Separated</option>
                                <option {{ old('marital_status') == 'Divorced' ? 'Selected' : '' }}>Divorced</option>
                            </select>
                            @error('marital_status')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birth_date" class="col-form-label col-md-2">Birth Date</label>
                        <div class="col-md-8">
                            <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
                            @error('birth_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nid" class="col-form-label col-md-2">NID</label>
                        <div class="col-md-8">
                            <input type="text" name="nid" id="nid" class="form-control @error('nid') is-invalid @enderror" value="{{ old('nid') }}">
                            @error('nid')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            <small class="form-text text-muted">
                                Your national identity card number.
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-form-label col-md-2">City</label>
                        <div class="col-md-8">
                            <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                            @error('city')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-form-label col-md-2">Address</label>
                        <div class="col-md-8">
                            <textarea name="address" id="address" rows="2" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                            @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contact_number" class="col-form-label col-md-2">Contact Number</label>
                        <div class="col-md-8">
                            <input type="text" name="contact_number" id="contact_number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ old('contact_number') }}">
                            @error('contact_number')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-form-label col-md-2">Email Address</label>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resume" class="col-form-label col-md-2">Resume</label>
                        <div class="col-md-8">
                            <input type="file" name="resume" id="resume" class="form-control-file @error('resume') is-invalid @enderror" value="{{ old('resume') }}">
                            @error('resume')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <label for="about_us" class="col-form-label">Where did you find about us?</label>
                            <textarea name="about_us" id="about_us" rows="3" class="form-control @error('about_us') is-invalid @enderror">{{ old('about_us') }}</textarea>
                            @error('about_us')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <input type="checkbox" name="clearify" id="clearify" class="form-check-input @error('clearify') is-invalid @enderror">
                            <label for="clearify" class="form-check-label">Do you clearify all the information in this form?</label>
                            @error('clearify')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary">Send Application</Button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LfYwq8UAAAAAAW-MH32BTfFsAmaG1zV2dJNGjPk"></script>
@endpush
