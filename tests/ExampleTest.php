<?php

namespace Caominhduc3108\Attributes\Tests;

use Orchestra\Testbench\TestCase;
use Caominhduc3108\Attributes\AttributesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AttributesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
