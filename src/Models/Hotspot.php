<?php


namespace devcake\hotspotpackage\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotspot extends Model
{
    protected $fillable = ['x', 'y', 'z', 'frame_in', 'frame_out, video_id'];

    public function video(): BelongsTo {
        return  $this->belongsTo(Video::class);
    }
}