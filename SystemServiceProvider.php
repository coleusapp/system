<?php

namespace Coleus\System;

use Illuminate\Support\ServiceProvider;

class SystemServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'system');
        $this->mergeConfigFrom(__DIR__.'/config/system.php', 'system');
        // $this->publishes([
        //     __DIR__.'/resources/dist' => public_path('dist/coleus/system')
        // ], 'dist');

        $this->app->bind('system', function ($app) {
            return new System();
        });
    }

    public function boot()
    {
        //
    }
}
