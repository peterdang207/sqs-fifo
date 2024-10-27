<?php

namespace Peterdang\SqsFifo;

use Illuminate\Support\ServiceProvider;

class SqsFifoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Summable', function ($app) {
            return new Summable();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}