@extends('layouts.profile')

@section('title', 'Accounts')

@section('profile-content')

    <div class="card">

        <div class="card-header">Connect Social Accounts</div>

        <div class="card-body">

            <form id="social-accounts" method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

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

@endsection
