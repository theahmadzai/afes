@extends('layouts.profile')

@section('title', 'Notifications')

@section('profile-content')

    <div class="card">

        <div class="card-header">Notifications</div>

        <div class="card-body">

            <form method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

                <div class="form-group row">
                    <label class="col-form-label col-md-4">Email Address</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-4">News & Updates</label>
                    <div class="col-md-8">
                        <label class="switch">
                            <input type="checkbox" name="notifications" {{ Auth::user()->notifications ? 'checked' : '' }}>
                            <span class="slider"></span>
                        </label>
                        <small class="form-text text-muted">
                            Do you want to receive email notifications from Afghan Evaluation Society. Turning this off will turn all notifications off.
                        </small>
                        @error('notifications')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">Save Preferences</Button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection
