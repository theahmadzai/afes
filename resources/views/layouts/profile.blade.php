@extends('layouts.app')

@section('content')

    <div class="container py-3">

        <div class="row">

            <div class="col-md-4">

                <div class="nav flex-column nav-pills">
                    <a href="{{ url('profile/settings/general') }}" class="nav-link {{ (request()->segment(3) == 'general') ? 'active' : '' }}">General</a>
                    <a href="{{ url('profile/settings/security') }}" class="nav-link {{ (request()->segment(3) == 'security') ? 'active' : '' }}" >Security</a>
                    <a href="{{ url('profile/settings/notifications') }}" class="nav-link {{ (request()->segment(3) == 'notifications') ? 'active' : '' }}">Notifications</a>
                    <a href="{{ url('profile/settings/accounts') }}" class="nav-link {{ (request()->segment(3) == 'accounts') ? 'active' : '' }}">Accounts</a>
                    <a href="{{ url('profile/settings/subscriptions') }}" class="nav-link {{ (request()->segment(3) == 'subscriptions') ? 'active' : '' }}">Subscriptions</a>
                    <a href="{{ url('profile/settings/billing') }}" class="nav-link {{ (request()->segment(3) == 'billing') ? 'active' : '' }}">Billing</a>
                </div>

            </div>

            <div class="col-md-8 pl-md-0">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="tab-content">

                    @yield('profile-content')

                </div>

            </div>

        </div>

    </div>

@endsection
