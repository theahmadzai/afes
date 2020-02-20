@extends('layouts.app')

@section('title', 'Duties and responsibilities of members')

@section('content')

    @component('partials.head')
        Duties and responsibilities of members
    @endcomponent

    @component('partials.breadcrumb-about')
        Duties and responsibilities of members
    @endcomponent

    <div class="container py-3">

        <div class="row">
            <div class="col">
                <h3>Article 48:</h3>
                <p>All the members (General Assembly, Board of Directors, the Executive Committee and other staff members) must observe the Afghan laws including the NGOs law and the organization’s internal rules and regulations.</p>
            </div>

            <div class="col">
                <h3>Article 49:</h3>
                <p>All Executive Committee and staff members can directly refer their complaints, which were ignored by the upper management, to the Board of Directors who shall be responsible to consider them.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Article 50:</h3>
                <p>The organization can establish joint ventures with other organizations to implement certain activities that are in line with the strategic objectives, vision and mission of the organization.</p>
            </div>
        </div>

    </div>

@endsection
