<?php

namespace GetThingsDone\Attributes\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use GetThingsDone\Attributes\AttributesServiceProvider;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [AttributesServiceProvider::class];
    }
}
