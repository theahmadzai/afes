@extends('layouts.app')

@section('title', 'Chairman\'s Message')

@section('content')

    @component('partials.head')
        Chairman's Message
    @endcomponent

    @component('partials.breadcrumb')
        Chairman's Message
    @endcomponent

    <div class="container py-3">
        <div class="row text-justify">
            <div class="col">
                <div class="image-wrapper float-left pr-3">
                    <img class="img-thumbnail img-responsive" src="/img/chairman.jpg" alt="Chairman AFES">
                </div>
                <p>While drafting this message, I realized how quickly has 2016 passed and we have just stepped into the New Year 2017. During the past year, we have had remarkable achievements.</p>
                <p>The focus of our efforts was to establish long lasting relations with local, regional and global evaluation communities during the past 12 months, and we have achieved this milestone very gloriously. AfES became an institutional member to Asia Pacific Evaluation Association (APEA) and Community of Evaluators South Asia (CoE-SA), and have made very good relations with Community of Evaluators Nepal (CoE-N), the IOCE, EvalPartners, and many others among.</p>
            </div>
            <div class="col">
                <p>On the other hand, most importantly, we have made very good reputation in Afghanistan, we are now known by many governmental agencies, ministries and NGOs as a well reputed organization promoting evaluation in the country. Afghan Ministry of Economy requested that we speak and present on best practices on evaluation forums at the 1st National RBME Forum that was held on 20th December, 2016 in Kabul. International representation of AfES was very impressive during the past 12 months; AfES board members attended the APEA Conference in Vietnam, and the EES Conference in the Netherlands.</p>
                <p>During 2016, AfES launched its series of training titled “The Young and Emerging Evaluators Training Program”, and this series will continue going forward in building the capacity of YEEs in Afghanistan, including through the recent small grant program of IOCE/EvalPartners, in collaboration with Community of Evaluators Nepal.</p>
            </div>
            <div class="col">
                <p>I would like to thank our board members who have dedicated their time, energy and efforts in making all these happen.</p>
                <p>Lastly, I would like to call on behalf of the board of directors that our mission for 2017 will be more challenging, and the focus of 2017 will be on building individual and institutional capacities in M&E and advancing the theory, practice and use of evaluations; as well as strengthening the institutional capacity of AfES, including increase in our members.</p>
                <p>Happy New Year 2017 and I hope for a just, equitable and sustainably developed Afghanistan, and the planet. We can improve lives through sound and rigorous evaluations.</p>
                <p class="font-weight-bold">
                        Sincerely,<br>
                        Samandar Mahmodi<br>
                        Chairman<br>
                        Afghan Evaluation Society (AfES)
                </p>
            </div>
        </div>
    </div>

@endsection
