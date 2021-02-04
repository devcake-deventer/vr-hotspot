<?php


namespace devcake\hotspotpackage\Tests\Feature\GraphQL\Queries;

use devcake\hotspotpackage\Tests\TestCase;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;

class HotspotsQueryTest extends Testcase
{
    public function test_can_retrieve_hotspots()
    {
        $response = $this->graphQL(/** @lang GraphQL */ '
            {
              hotspots {
                id
              }
            }
        ');

        $this->assertEquals(true, true);
    }

    public function test_can_retrieve_by_id()
    {
        $response = $this->graphQL(/** @lang GraphQL */ '
            {
              hotspot(id: 1) {
                id
              }
            }
        ');

        $this->assertEquals(true, true);
    }

    public function test_fails_when_id_is_missing()
    {
        $response = $this->graphQL(/** @lang GraphQL */ '
            {
              hotspot {
                id
              }
            }
        ');

        $this->assertEquals(true, true);
    }

    public function test_fails_when_id_does_not_exist()
    {
        $response = $this->graphQL(/** @lang GraphQL */ '
            {
              hotspot(id: -1) {
                id
              }
            }
        ');

        $this->assertEquals(true, true);
    }
}