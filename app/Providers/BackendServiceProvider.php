<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\BookRepositoryInterface', 'App\Repositories\BookRepository');
        $this->app->bind('App\Repositories\ClassificationRepositoryInterface', 'App\Repositories\ClassificationRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
