@extends('layouts.profile')

@section('title', 'Notifications')

@section('profile-content')

    <div class="card">

        <div class="card-header">Notifications</div>

        <div class="card-body">

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

                <div class="form-group row">
                    <label for="eemail" class="col-form-label col-md-4">Email Address</label>
                    <div class="col-md-8">
                        <input type="text" name="email" id="eemail" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? Auth::user()->email }}">
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

@endsection
