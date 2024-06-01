<?php

namespace DocVerter\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class DocverterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('docverter', function ($app) {
            return new DocverterManager();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/docverter.php' => config_path('docverter.php'),
        ], 'config');
    }
}
