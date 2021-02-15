<?php


namespace devcake\hotspotpackage\GraphQL\Queries;

use devcake\hotspotpackage\Models\Video;

class GetVideoByURL
{
    public function resolve($_, array $args)
    {
        return Video::where('file_path', '=', $args['file_path'])->first();
    }
}