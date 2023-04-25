<?php

namespace Bahaeddine\Laracurrency;

use Illuminate\Support\ServiceProvider;

class LaracurrencyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'bahaeddine');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'bahaeddine');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laracurrency.php', 'laracurrency');

        // Register the service the package provides.
        $this->app->singleton('laracurrency', function ($app) {
            return new Laracurrency;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laracurrency'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laracurrency.php' => config_path('laracurrency.php'),
        ], 'laracurrency.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/bahaeddine'),
        ], 'laracurrency.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/bahaeddine'),
        ], 'laracurrency.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/bahaeddine'),
        ], 'laracurrency.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
