<?php

namespace App\Traits;
use Storage;

trait Imagify
{
    public function getLocationAttribute()
    {
        return 'thumbnails/' . basename($this->file->filename);
    }

    public function getThumbnailAttribute()
    {
        return Storage::disk('public')->url('thumbnails/' . basename($this->file->filename));
    }

    public function getImageAttribute()
    {
        return Storage::disk('public')->url($this->file->filename);
    }
}
