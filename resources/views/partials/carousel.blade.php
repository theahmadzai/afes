<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($footer_posts as $post)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="d-block w-100 h-80 courosel-img-fix" src="{{ $post->imagePath }}" alt="{{ $post->title }}">
                <div class="carousel-caption d-none d-md-block">
                    <div class="mb-2 p-2" style="background:#000; opacity:0.6;">
                        <h5 class="lead">{{ $post->title }}</h5>
                        <p>{!! Str::words($post->body, 20, '...') !!}</p>
                    </div>
                    <a class="btn btn-secondary text-uppercase" href="{{ route('blog', [$post->slug]) }}">READ MORE</a>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
