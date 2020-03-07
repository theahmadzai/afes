<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Observers\PostObserver;
use App\Observers\FileObserver;
use App\Post;
use App\File;
use App\Job;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Post::observe(PostObserver::class);
        File::observe(FileObserver::class);

        Blade::directive('recaptcha', function () {
            return '<input type="hidden" id="g-recaptcha-response" name="_recaptcha">';
        });

        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });

        View::composer('*', function ($view) {
            $view->with([
                'footer_posts' => Post::published()->latest()->paginate(5),
                'footer_jobs' => Job::open()->latest()->paginate(3),
            ]);
        });
    }
}
