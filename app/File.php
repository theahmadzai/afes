<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    public function getThumbnailAttribute()
    {
        Storage::disk('public')->url('thumbnails/' . basename($this->filename));
    }

    public function fileable()
    {
        return $this->morphTo();
    }
}
