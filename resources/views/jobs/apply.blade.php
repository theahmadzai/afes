@extends('layouts.app')

@section('title', 'Apply')

@section('content')
<div class="container my-5">

    <form method="POST" action="{{ url()->current() }}" class="col-md-8">
        @csrf

        <div class="form-group row">
            <label for="first_name" class="col-form-label col-md-2">First Name</label>
            <div class="col-md-8">
                <input type="text" name="first_name" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-form-label col-md-2">Last Name</label>
            <div class="col-md-8">
                <input type="text" name="last_name" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="gender" class="col-form-label col-md-2">Gender</label>
            <div class="col-md-8">
                <select name="gender" class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="marital_status" class="col-form-label col-md-2">Marital Status</label>
            <div class="col-md-8">
                <select name="marital_status" class="form-control">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                    <option>Divorced</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="birth_date" class="col-form-label col-md-2">Birth Date</label>
            <div class="col-md-8">
                <input type="date" name="birth_date" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="cnic" class="col-form-label col-md-2">CNIC</label>
            <div class="col-md-8">
                <input type="text" name="cnic" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-form-label col-md-2">City</label>
            <div class="col-md-8">
                <input type="text" name="city" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-form-label col-md-2">Address</label>
            <div class="col-md-8">
                <textarea name="address" rows="2" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="contact_number" class="col-form-label col-md-2">Contact Number</label>
            <div class="col-md-8">
                <input type="text" name="contact_number" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-form-label col-md-2">Email Address</label>
            <div class="col-md-8">
                <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-8 offset-md-2">
                <label for="about_us" class="col-form-label">Where did you find about us?</label>
                <textarea name="about_us" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-8 offset-md-2">
                <input type="checkbox" name="clearify" class="form-check-input">
                <label for="clearify" class="form-check-label">Do you clearify all the information in this form?</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-8 offset-md-2">
                <button type="submit" class="btn btn-primary">Send Application</Button>
            </div>
        </div>

    </form>

</div>
@endsection
