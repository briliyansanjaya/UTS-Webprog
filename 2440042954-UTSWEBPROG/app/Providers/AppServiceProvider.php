<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Component;

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
        view()->composer(
            'components.navbar',
            function ($view) {
                $view->with('categories', \App\Models\Category::all());
            }
        );
    }
}
