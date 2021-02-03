<?php

namespace devcake\hotspotpackage\Tests\Unit;

use devcake\hotspotpackage\Models\Video;
use devcake\hotspotpackage\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideoTest extends TestCase
{
    use RefreshDatabase;

    function test_a_video_has_a_file_path()
    {
        $video = new Video();
        $video->file_path = 'some_file_path.png';
        $this->assertEquals('some_file_path.png', $video->file_path);
    }

}