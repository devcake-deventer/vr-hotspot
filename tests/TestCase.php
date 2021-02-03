<?php

namespace devcake\hotspotpackage\Tests;

use devcake\hotspotpackage\HotspotServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            HotspotServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // setup environment stuff
    }
}