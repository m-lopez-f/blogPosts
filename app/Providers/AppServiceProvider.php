<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Contracts\Services\Api\Blog\BlogApi',
            'App\Services\Api\Blog\BlogApi'
        );

        $this->app->bind(
            'App\Contracts\Support\HttpClientInterface',
            'App\Support\HttpClient'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
