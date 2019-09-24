@extends('layouts.profile')

@section('title', 'General')

@section('profile-content')

    <div class="card">

        <div class="card-header">General</div>

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
                            <option value="male" {{ old('gender') ?? Auth::user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') ?? Auth::user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birth_date" class="col-form-label col-md-4">Birth Date</label>
                    <div class="col-md-8">
                        <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') ?? Auth::user()->birth_date }}">
                        @error('birth_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-form-label col-md-4">City</label>
                    <div class="col-md-8">
                        <input type="text" name="city" id="city" placeholder="City you are living in" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') ?? Auth::user()->city }}">
                        @error('city')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-form-label col-md-4">Address</label>
                    <div class="col-md-8">
                        <textarea name="address" id="address" placeholder="Your current address" rows="2" class="form-control @error('address') is-invalid @enderror">{{ old('address') ?? Auth::user()->address }}</textarea>
                        @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-form-label col-md-4">Contact Number</label>
                    <div class="col-md-8">
                        <input type="text" name="phone" id="phone" placeholder="Mobile Number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ?? Auth::user()->phone }}">
                        @error('phone')<span class="invalid-feedback">{{ $message }}</span>@enderror
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

@endsection
