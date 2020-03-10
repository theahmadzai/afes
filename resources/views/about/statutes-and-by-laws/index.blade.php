@extends('layouts.app')

@section('title', 'Statutes And By-Laws')

@section('content')

    @component('partials.head')
        Statutes And By-Laws
    @endcomponent

    @component('partials.breadcrumb')
        Statutes And By-Laws
    @endcomponent

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-9 p-4">

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">General Provisions</h5>
                        <p class="card-text">
                            <b>Article 1: Aim of the Statute</b>
                            <p>The Statutes are enacted under the Afghan NGOs law for steering the overall organizational vision, mission and structure.</p>
                        </p>
                        <a href="{{ url()->current() }}/general-provisions" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Aim and Objectives of the Organization</h5>
                        <p class="card-text">
                            <b>Article 9: Vision</b>
                            <p>Vision of the organization is “Strengthened Evaluations for Sustainable Development”</p>
                        </p>
                        <a href="{{ url()->current() }}/aim-and-objectives-of-the-organization" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Governance Structure</h5>
                        <p class="card-text">
                            <b>Article 14: Leading Bodies</b>
                            <p>The organization has the following leading bodies.</p>
                            <p>⦁ General Assembly (GA)</p>
                        </p>
                        <a href="{{ url()->current() }}/governance-structure" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Use of Property</h5>
                        <p class="card-text">
                            <b>Article 39: Property Rights</b>
                            <p>All real properties and movables of the organization belong to the organization, are recorded as such and no staff member</p>
                        </p>
                        <a href="{{ url()->current() }}/use-of-property" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Staff recruitment, wages and leave</h5>
                        <p class="card-text">
                            <b>Article 44: Recruitment</b>
                            <p>⦁ All Afghan and foreign nationals willing to work can be recruited based on the needs of</p>
                        </p>
                        <a href="{{ url()->current() }}/staff-recruitment-wages-and-leave" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Reporting and Financial Operations</h5>
                        <p class="card-text">
                            <b>Article 47:</b>
                            <p>⦁ The organization shall maintain an Afghani and a USD account.</p>
                            <p>⦁ Bank accounts should have at least two</p>
                        </p>
                        <a href="{{ url()->current() }}/reporting-and-financial-operations" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Duties and responsibilities of members</h5>
                        <p class="card-text">
                            <b>Article 48: </b>
                            <p>All the members (General Assembly, Board of Directors, the Executive Committee and other staff members)</p>
                        </p>
                        <a href="{{ url()->current() }}/duties-and-responsibilities-of-members" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Miscellaneous decrees</h5>
                        <p class="card-text">
                            <b>Article 51:</b>
                            <p>The funding sources can be ensured by membership payments, donations, charity and attracting national and international assistance based</p>
                        </p>
                        <a href="{{ url()->current() }}/miscellaneous-decrees" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>

            </div>

            @include('partials.sectionlist')

        </div>

    </div>

@endsection
