<?php

namespace Cryptommer\Smsirlaravel\Tests;

use Orchestra\Testbench\TestCase;
use Cryptommer\Smsirlaravel\SmsirlaravelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SmsirlaravelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
