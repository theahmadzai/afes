<?php

namespace App\Traits;

use Intervention\Image\Facades\Image as InterventionImage;
use Storage;

trait Imageify
{
    public function getImage()
    {
        return Storage::disk('public')->url($this->filename);
    }

    public function getThumbnail()
    {
        return Storage::disk('public')->url('thumbnails/' . basename($this->filename));
    }

    public function createThumbnail($x = 300, $y = 150)
    {
        $image = InterventionImage::make($this->getImage())->fit($x, $y, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        })->encode();

        Storage::disk('public')->put('thumbnails/' . basename($this->filename), $image);
    }
}
