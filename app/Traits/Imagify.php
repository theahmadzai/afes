<?php

namespace App\Traits;
use Storage;

trait Imagify
{
    public function getThumbnailAttribute()
    {
        return Storage::disk('public')->url('thumbnails/' . basename($this->file ? $this->file->filename : 'default.png'));
    }

    public function getImageAttribute()
    {
        return Storage::disk('public')->url($this->file ? $this->file->filename : 'files/default.png');
    }
}
