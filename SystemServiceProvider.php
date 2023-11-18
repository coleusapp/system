<?php

namespace Coleus\System;

use Illuminate\Support\ServiceProvider;

class SystemServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('system', function ($app) {
            return new System();
        });
    }

    public function boot()
    {
        //
    }
    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     $package
    //         ->name('system')
    //         ->hasConfigFile()
    //         ->hasViews()
    //         ->hasMigration('create_system_table')
    //         ->hasRoute('system')
    //         ->hasCommand(SystemCommand::class);
    // }
}
