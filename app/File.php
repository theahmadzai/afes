<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

class File extends Model
{
    use SoftDeletes;

    public function getThumbnailAttribute()
    {
        return Storage::disk('public')->url('thumbnails/' . basename($this->filename));
    }

    public function getImageAttribute()
    {
        return Storage::disk('public')->url($this->filename);
    }

    public function fileable()
    {
        return $this->morphTo();
    }
}
