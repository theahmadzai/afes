@extends('layouts.app')

@section('title', $post->title)

@section('content')

    @component('partials.head')
        {{ $post->title }}
    @endcomponent

    <div class="container py-3">

        <div class="row">

            <div class="col-md-8">

                <div class="container p-0 app-post">

                    <p class="app-post-tags"><b>Posted in</b> {{ $post->tags->pluck('name')->implode(', ') }}</p>

                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">

                    <div class="row">
                        <div class="col-sm-6 py-3">
                            <div class="container d-flex align-items-center py-3 app-post-first">
                                <img class="app-post-avatar" src="{{ $post->user->gravatar }}">
                                <div>
                                    <p class="ml-3 mb-0 app-post-name">{{ $post->user->name }}</p>
                                    <p class="ml-3 mb-0 text-muted">{{ $post->published_at->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 py-3">
                            <div class="container d-flex align-items-center">
                                <div class="fb-share-button mr-2" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world" data-size="large">Tweet</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-post-body">{!! html_entity_decode($post->body) !!}</div>

                </div>

                <div id="disqus_thread" class="py-3"></div>

            </div>

            <div class="col-md-4 pl-md-0">

                <div class="container py-3" style="background:#ededed">
                    <p><b>News</b></p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ducimus deserunt officia inventore sit doloribus perferendis, itaque eius et, sapiente magnam alias commodi aperiam doloremque quae eaque vero nam tempora.</p>
                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
        }(document, "script", "twitter-wjs"));
    </script>
    <script>
        var disqus_config = function () {
        this.page.url = '{{ url()->current() }}';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '{{ $post->id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://afghanevaluationsociety.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
@endpush
