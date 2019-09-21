@extends('layouts.app')

@section('title', 'Statutes And By-Laws')

@section('content')

    @component('partials.head')
        Statutes And By-Laws
    @endcomponent

    @component('partials.breadcrumb')
        Statutes And By-Laws
    @endcomponent

    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h3>Article 1: Aim of the Statute</h3>
                <p>The Statutes are enacted under the Afghan NGOs law for steering the overall organizational vision, mission and structure. It also determines the responsibilities and authorities of the leading bodies including the General Assembly, Board of Directors and Executive Secretariat. These Statutes also establish order, accountability and transparency within the organization.</p>
            </div>
            <div class="col">
                <h3>Article 2: Name of the Organization</h3>
                <p>This organization is named and registered with Afghan Ministry of Economy as Afghan Evaluation Society Organization, whose abbreviation is (AFESO) – for its activities; the business name used in documents would be Afghan Evaluation Society with abbreviation of (AfES).</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 3: Founding Members</h3>
                <p>The named “Afghan Evaluation Society Organization” was founded by:</p>
                <ul>
                    <li>Mr. Samandar Mahmodi, as the Principal Founder</li>
                    <li>Mr. Qudratullah Jahid, as Founding Board Member</li>
                    <li>Mr. Imad Ahmad Haroon, as Founding Board Member</li>
                    <li>Mr. Tooryalay Nasery, as Founding Board Member</li>
                </ul>
            </div>
            <div class="col">
                <h3>Article 4: Symbol</h3>
                <p>The organization symbol or logo is as following:</p>
                <img src="/img/origional.png" alt="AFES Symbol">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 5: Applicable Laws</h3>
                <p>The organization will follow in all its activities in the provisions of these statutes, the NGOs law and other laws of the Government of Islamic Republic of Afghanistan.</p>
            </div>
            <div class="col">
                <h3>Article 6: Location of the Organization</h3>
                <p>The Head Office or Main Office of the organization is in Kabul and shall perform the main activities from Kabul. Changing of address is decided by the organization and will be communicated to the NGOs department of the Ministry of Economy. In case of the expansion of activities, the organization shall establish field and provision offices in other provinces of Afghanistan.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 7: Start and Duration of the Activity</h3>
                <p>The Organization started its activities in August 2013 and then it was officially registered as a non-profit NGO in September 2015, and it will continue its activities for an unlimited duration.</p>
            </div>

            <div class="col">
                <h3>Article 8: Independence</h3>
                <p>The organization is independent and is not affiliated to any commercial, political, religious, ethnic, racial or governmental group, organization, entity or institution. To represent Afghanistan’s evaluation community, the organization will keep active membership of national, regional and global networks and partnerships for promoting the theory, practice and use of evaluation.</p>
            </div>
        </div>
    </div>

@endsection
