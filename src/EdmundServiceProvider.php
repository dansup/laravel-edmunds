<?php

namespace Dansup\Edmunds;

use Illuminate\Support\ServiceProvider;

class EdmundServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-edmunds.php' => $this->app->configPath().'/'.'laravel-edmunds.php',
        ], 'config');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-edmunds.php', 'laravel-edmunds');

        $this->app->bind('laravel-edmunds', function () {

            return new Api();

        });
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return ['laravel-edmunds'];
    }
}