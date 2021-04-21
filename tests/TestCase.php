<?php

namespace Christophrumpel\MissingLivewireAssertions\Tests;

use Christophrumpel\MissingLivewireAssertions\MissingLivewireAssertionsServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Spatie\\MissingLivewireAssertions\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MissingLivewireAssertionsServiceProvider::class,
        ];
    }
}
