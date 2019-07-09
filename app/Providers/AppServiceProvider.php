<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classification;

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
        view()->composer('partials.navbar', function($view) {
            $view->with('classifications', Classification::all());
        });
    }
}
