@extends('layouts.app')

@section('title', Auth::user()->name)

@section('content')

    <div class="container py-3">

        <div class="row">

            <div class="col-md-4">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Profile</a>
                    <a class="nav-link" id="v-pills-privacy-tab" data-toggle="pill" href="#v-pills-privacy" aria-selected="true">Privacy</a>
                    <a class="nav-link" id="v-pills-security-tab" data-toggle="pill" href="#v-pills-security">Security and Login</a>
                    <a class="nav-link" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social">Social Accounts</a>
                </div>

            </div>

            <div class="col-md-8 pl-md-0">

                @if (session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile">

                        <div class="card">
                            <div class="card-header">Profile</div>

                            <div class="card-body">
                                <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" novalidate>
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-form-label col-md-4">Avatar</label>
                                        <div class="col-md-8">
                                            <img class="mb-2 shadow" style="width:100px;height:100px;" src="{{ Auth::user()->gravatar }}">
                                            <input type="url" name="avatar" id="avatar" class="form-control @error('avatar') is-invalid @enderror" value="{{ old('avatar') ?? Auth::user()->gravatar }}">
                                            @error('avatar')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-form-label col-md-4">Display Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? Auth::user()->name }}">
                                            @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-form-label col-md-4">Gender</label>
                                        <div class="col-md-8">
                                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                                <option {{ old('gender') == 'Male' ? 'Selected' : '' }}>Male</option>
                                                <option {{ old('gender') == 'Female' ? 'Selected' : '' }}>Female</option>
                                            </select>
                                            @error('gender')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="marital_status" class="col-form-label col-md-4">Marital Status</label>
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
                                        <label for="birth_date" class="col-form-label col-md-4">Birth Date</label>
                                        <div class="col-md-8">
                                            <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
                                            @error('birth_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="city" class="col-form-label col-md-4">City</label>
                                        <div class="col-md-8">
                                            <input type="text" name="city" id="city" placeholder="City you are living in" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                                            @error('city')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-form-label col-md-4">Address</label>
                                        <div class="col-md-8">
                                            <textarea name="address" id="address" placeholder="Your current address" rows="2" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                            @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_number" class="col-form-label col-md-4">Contact Number</label>
                                        <div class="col-md-8">
                                            <input type="text" name="contact_number" id="contact_number" placeholder="Mobile Number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ old('contact_number') }}">
                                            @error('contact_number')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Update Profile</Button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- PRIVACY -->

                    <div class="tab-pane fade" id="v-pills-privacy">

                        <div class="card">
                            <div class="card-header">Privacy</div>

                            <div class="card-body">

                                <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" novalidate>
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-form-label col-md-4">Email Address</label>
                                        <div class="col-md-8">
                                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? Auth::user()->email }}">
                                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-form-label col-md-4">Notification</label>
                                        <div class="col-md-8">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                            <small class="form-text text-muted">
                                                Do you want to receive email notifications from Afghan Evaluation Society. Turning this off will turn of all notifications.
                                            </small>
                                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-form-label col-md-4">Notification</label>
                                        <div class="col-md-8">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                            <small class="form-text text-muted">
                                                Do you want to receive email notifications from Afghan Evaluation Society. Turning this off will turn of all notifications.
                                            </small>
                                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-security">
                        <div class="card">
                            <div class="card-header">Email & Username</div>
                            <div class="card-body">
                                <form method="POST" action="{{ url()->current() }}" novalidate>
                                    @csrf
                                    <input type="hidden" name="update" value="EmailAndUsername">

                                    <div class="form-group row">
                                        <label for="email" class="col-form-label col-md-4">Email Address</label>
                                        <div class="col-md-8">
                                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? Auth::user()->email }}">
                                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-form-label col-md-4">Username</label>
                                        <div class="col-md-8 input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') ?? Auth::user()->username }}">
                                            @error('username')<span class="invalid-feedback">{{ $message }}</span>@enderror
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
                            <div class="card-header">Password</div>
                            <div class="card-body">
                                <form method="POST" action="{{ url()->current() }}" novalidate>
                                    @csrf
                                    <input type="hidden" name="update" value="Password">

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
                                        <p class="mb-0 text-muted">{{ Auth::user()->last_login_browser }} - {{ Auth::user()->last_login_date->diffForHumans() }}</p>
                                        <p class="mb-0">{{ Auth::user()->last_login_device }} <small class="text-primary">({{ Auth::user()->last_login_ip }})</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-social">

                        <div class="card">
                            <div class="card-header">Connect Social Accounts</div>
                            <div class="card-body">
                                <form id="social-accounts" method="POST" action="{{ url()->current() }}" novalidate>
                                    @csrf
                                    <input type="hidden" name="update" value="SocialAccounts">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-4">Facebook</label>
                                        <div class="col-md-8">
                                            <label class="switch">
                                                <input name="facebook" type="checkbox" {{ $identities['facebook'] ? 'checked' : ''}} onchange="this.form.submit();">
                                                <span class="slider round"></span>
                                            </label>
                                            @error('facebook')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-4">Twitter</label>
                                        <div class="col-md-8">
                                            <label class="switch">
                                                <input name="twitter" type="checkbox" {{ $identities['twitter'] ? 'checked' : ''}} onchange="this.form.submit();">
                                                <span class="slider round"></span>
                                            </label>
                                            @error('twitter')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
