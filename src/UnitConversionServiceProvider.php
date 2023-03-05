<?php

namespace NehalPatel\UnitConversion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NehalPatel\UnitConversion\Commands\UnitConversionCommand;

class UnitConversionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('unit-conversion')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_unit-conversion_table')
            ->hasCommand(UnitConversionCommand::class);
    }
}
