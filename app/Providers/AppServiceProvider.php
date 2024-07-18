<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PostService;
use App\Models\Post;

use App\Observers\PostObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //service class
        $this->app->singleton(PostService::class, function ($app) {
            return new PostService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //post observer
        Post::observe(PostObserver::class);
    }
}
