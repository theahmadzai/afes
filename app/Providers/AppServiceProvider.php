<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Observers\PostObserver;
use App\Observers\FileObserver;
use App\Post;
use App\File;

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

        View::composer('flash.success', function($view) {
            $view->with('header', 'Application Sent!');
            $view->with('body', 'Your application has been received successfuly and will be reviwed in few days please wait for our notification!');
        });
    }
}
