<?php

namespace App\Traits;

use Intervention\Image\Facades\Image as InterventionImage;
use Storage;

trait Imageify
{
    public function getImage()
    {
        return '/storage/images/' . $this->filename;
    }

    public function getThumbnail()
    {
        return '/storage/thumbnails/' . basename($this->filename);
    }

    public function createThumbnail($x = 300, $y = 150)
    {
        $image = InterventionImage::make(public_path($this->filename))->fit($x, $y, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        })->encode();

        Storage::put('public/thumbnails/' . basename($this->filename), $image);
    }
}
