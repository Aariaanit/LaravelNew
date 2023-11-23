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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Blade::directive("sayHello", function($value) {
            return "Hello $value";
        });

        \Blade::directive('toUpperCase', function ($value) {
            return strtoupper($value);
        });
    }
}
