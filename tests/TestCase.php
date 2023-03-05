<?php

namespace NehalPatel\UnitConversion\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use NehalPatel\UnitConversion\UnitConversionServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NehalPatel\\UnitConversion\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            UnitConversionServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_unit-conversion_table.php.stub';
        $migration->up();
        */
    }
}
