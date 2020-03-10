<footer class="container-fluid app-footer">

    <div class="row p-4">

        <div class="col-md-3 px-0 border-bottom-md-3 mb-md-3">
            <h6 class="mb-3 text-white">Recent Opportunity Posting</h6>
            <ul>
                @foreach ($footer_jobs as $job)
                    <li><a href="/jobs/{{$job->id}}">{{ $job->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Latest Publications</h6>
            <ul>
                @foreach ($footer_posts as $post)
                    <li><a href="/blog/{{$post->slug}}">{{ $post->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Statutes And By-Laws</h6>
            <ul>
                <li><a href="#">General Provisions</a></li>
                <li><a href="#">Aim and Objectives of the Organization</a></li>
                <li><a href="#">Governance Structure</a></li>
                <li><a href="#">Use of Property</a></li>
                <li><a href="#">Staff recruitment, wages and leave</a></li>
                <li><a href="#">Reporting and Financial Operations</a></li>
                <li><a href="#">uties and responsibilities of members</a></li>
                <li><a href="#">Miscellaneous decrees</a></li>
            </ul>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Contact Details</h6>
            <p>House# 236, Behind District 4 Municipality Office 5 th Street, 40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001</p>
            <p>
                <b>Phone: </b>+93 771 251 253 <br>
                <a href="contact@afghanevaluation.af">contact@afghanevaluation.af</a><br>
                <a href="webmster@afghanevaluation.af">webmaster@afghanevaluation.af</a>
            </p>
        </div>

    </div>

    <div class="row p-4" style="background:#424242;">
        <div style="color:#888;">&copy; <span class="text-white">Copyright</span> 2020 by <span class="text-white">Afghan Evaluation Society</span>. All Rights Reserved.</div>
    </div>

</footer>
