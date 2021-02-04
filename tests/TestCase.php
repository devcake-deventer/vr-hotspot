<?php

namespace devcake\hotspotpackage\Tests;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use devcake\hotspotpackage\Providers\HotspotServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use MakesGraphQLRequests;

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

    protected function graphQLEndpointUrl(): string
    {
        return '/graphql';
    }

    protected function getEnvironmentSetUp($app)
    {
        // setup environment stuff
    }
}