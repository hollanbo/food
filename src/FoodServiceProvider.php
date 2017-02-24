<?php

namespace hollanbo\Food;

use Illuminate\Support\ServiceProvider;

class FoodServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('hollanbo\Food\Controllers\FoodController');
    }
}
