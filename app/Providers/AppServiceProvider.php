<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(

            'App\Repository\Bot\UserInterface',
            'App\Repository\Bot\UserRepository'
        );

        $this->app->bind(
            'App\Repository\Bot\FoodMenuInterface',
            'App\Repository\Bot\FoodMenuRepository'

        );
        $this->app->bind(
            'App\Repository\Bot\HotelInterface',
            'App\Repository\Bot\HotelRepository'

        );
        $this->app->bind(
            'App\Repository\Bot\OrderInterface',
            'App\Repository\Bot\OrderRepository'
            
        );
        
    }
}
