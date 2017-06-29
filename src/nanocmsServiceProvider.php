<?php namespace NanoSoluctions\NanoCMS;

use Illuminate\Support\ServiceProvider;

class NanoCMSServiceProvider extends ServiceProvider
{
    const _NAMESPACE = '\NanoSoluctions\NanoCMS';
    const _PATH_CONTROLLERS = self::_NAMESPACE . '\Controllers';    

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/Routes.php';
        }

        $this->loadViewsFrom(base_path('resources/views'), 'nanocms');
        $this->publishes([
            __DIR__.'/Views' => base_path('resources/views/nanocms'),
            __DIR__.'/Migrations' => base_path('database/migrations'),
            __DIR__.'/Seeds' => base_path('database/seeds')
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('NanoCMS', function ($app) {
            return new NanoCMS();
        });
    }
}