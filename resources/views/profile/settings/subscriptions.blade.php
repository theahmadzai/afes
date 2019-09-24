@extends('layouts.profile')

@section('title', 'Subscriptions')

@section('profile-content')

    <div class="card">

        <div class="card-header">Subscriptions</div>

        <div class="card-body">

            <ul class="list-group">

                @foreach(Auth::user()->subscriptions as $subscription)

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <div style="border-bottom:1px solid #900;" class="mb-2 pb-2"><b>{{ $subscription->name }}</b></div>
                            <div><b>Status: </b>{{ $subscription->stripe_status ? 'Active' : 'Inactive'}}</div>
                            <div><b>Subscription date: </b>{{ $subscription->created_at->toFormattedDateString() }}</div>
                            <div><b>Expires after: </b>{{ $subscription->created_at->addYear($subscription->quantity)->toFormattedDateString() }}</div>
                        </div>
                        <div>
                            <button class="btn btn-danger shadow-lg">Cancel</button>
                        </div>
                    </li>

                @endforeach

            </ul>

        </div>

    </div>

@endsection
