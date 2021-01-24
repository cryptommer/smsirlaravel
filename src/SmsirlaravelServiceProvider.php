<?php

namespace Cryptommer\Smsirlaravel;

use Illuminate\Support\ServiceProvider;

class SmsirlaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if (config('smsirlaravel.panel-routes', true)) {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        }
        $this->loadViewsFrom(__DIR__.'/views', 'smsirlaravel');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('smsirlaravel.php'),
            ], 'config');

            // for publish the views into main app
            $this->publishes([
                __DIR__.'/views' => resource_path('views/vendor/smsirlaravel'),
            ]);

            $this->publishes([
                __DIR__.'/migrations/' => database_path('migrations')
            ], 'migrations');

            // for publish the assets files into main app
            $this->publishes([
                __DIR__.'/assets' => public_path('vendor/smsirlaravel'),
            ], 'public');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'smsirlaravel');

        // Register the main class to use with the facade
        $this->app->singleton('smsirlaravel', function () {
            return new Smsirlaravel;
        });
    }
}
