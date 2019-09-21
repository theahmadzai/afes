<?php

namespace App\Traits;
use Storage;

trait Imagify
{
    public function getLocationAttribute()
    {
        if(!$this->file) {
            return 'thumbnails/default.png';
        }

        return 'thumbnails/' . basename($this->file->filename);
    }

    public function getThumbnailAttribute()
    {
        if(!$this->file) {
            return 'thumbnails/default.png';
        }

        return Storage::disk('public')->url('thumbnails/' . basename($this->file->filename));
    }

    public function getImageAttribute()
    {
        if(!$this->file) {
            return 'files/default.png';
        }

        return Storage::disk('public')->url($this->file->filename);
    }
}
