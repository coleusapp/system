<?php

namespace Coleus\System;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Coleus\System\Commands\SystemCommand;

class SystemServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('system')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_system_table')
            ->hasRoute('system')
            ->hasCommand(SystemCommand::class);
    }
}
