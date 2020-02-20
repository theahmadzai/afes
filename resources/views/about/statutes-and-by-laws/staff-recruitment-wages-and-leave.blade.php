@extends('layouts.app')

@section('title', 'Staff recruitment, wages and leave')

@section('content')

    @component('partials.head')
        Staff recruitment, wages and leave
    @endcomponent

    @component('partials.breadcrumb-about')
        Staff recruitment, wages and leave
    @endcomponent

    <div class="container py-3">

        <div class="row">
            <div class="col">
                <h3>Article 44: Recruitment</h3>
                <ul>
                    <li>All Afghan and foreign nationals willing to work can be recruited based on the needs of the organization, following the Afghan Labor, NGOs and internal laws, within the framework of a formal contract, after filing an application and considering their level of education, profession background and the criteria formulated in the job announcement.</li>
                    <li>Employees are recruited individually after a technical evaluation by the related department and the approval of the Executive Director or the Deputy Director. No discrimination shall take place during the recruitment process.</li>
                    <li>In the recruitment of the Afghan and foreign nationals all Afghan laws and international conventions shall be considered. The organization cannot hire children under the age of 18 years old.</li>
                    <li>Short-listed candidates shall pass job interviews and tests.</li>
                    <li>Staff contracts are signed by the Executive Directors or his/her designee</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 45: Wages and benefits</h3>
                <ul>
                    <li>Staff wages shall be paid as per the working conditions and the terms of the contract.</li>
                    <li>Benefits and allowances for the staff traveling to foreign countries, provinces and remote areas shall be paid according to the rules and regulations of the organization elaborated in the internal policies.</li>
                    <li>All official holidays shall be paid. The wage for daily workers shall be paid according to the prices in the labor market and the organization’s financial capabilities</li>
                    <li>The Executive Director and the Deputy Director are responsible for the payment of staff salaries and benefits, the payment of purchases, house rental, tax and duties as well as the overall transparency of financial operations.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Article 46: Leaves and rest</h3>
                <p>The staff and service personnel are entitled to paid leave as per the labor law of the Islamic Republic of Afghanistan in addition to all national and religious holidays.</p>
            </div>
        </div>

    </div>

@endsection
