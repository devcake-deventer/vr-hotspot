<?php

namespace devcake\hotspotpackage\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Video extends Model
{
    protected $fillable = ['file_path'];

    public function hotspots(): HasMany
    {
        return $this->hasMany(Hotspot::class);
    }
}