<?php

namespace devcake\hotspotpackage\Tests\Unit;

use devcake\hotspotpackage\Models\Hotspot;
use devcake\hotspotpackage\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HotspotTest extends TestCase
{
    use RefreshDatabase;

    function test_hotspot_has_x_coordinate()
    {
        $hotspot = new Hotspot();
        $hotspot->x = 2.25;
        $this->assertEquals(2.25, $hotspot->x);
    }

    function test_hotspot_has_y_coordinate()
    {
        $hotspot = new Hotspot();
        $hotspot->y = 2.25;
        $this->assertEquals(2.25, $hotspot->y);
    }

    function test_hotspot_has_z_coordinate()
    {
        $hotspot = new Hotspot();
        $hotspot->z = 2.25;
        $this->assertEquals(2.25, $hotspot->z);
    }

    function test_hotspot_has_frame_in()
    {
        $hotspot = new Hotspot();
        $hotspot->frame_in = 2;
        $this->assertEquals(2, $hotspot->frame_in);
    }

    function test_hotspot_has_frame_out()
    {
        $hotspot = new Hotspot();
        $hotspot->frame_out = 4;
        $this->assertEquals(4, $hotspot->frame_out);
    }

    function test_hotspot_has_video_id()
    {
        $hotspot = new Hotspot();
        $hotspot->video_id = 999;
        $this->assertEquals(999, $hotspot->video_id);
    }
}