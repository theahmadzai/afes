<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

class Image extends Model
{
    use SoftDeletes;

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getFilenameAttribute($value)
    {
        return Storage::url($value ?? 'default/image.png');
    }

    public function thumbnail()
    {
        if (!$this->getOriginal('image')) {
            return $this->image;
        }

        return '/storage/thumbnails/' . basename($this->image);
    }

    public function createThumbnail($x = 300, $y = 150)
    {
        $image = InterventionImage::make(public_path($this->image))->fit($x, $y, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        })->encode();

        Storage::put('public/thumbnails/' . basename($this->image), $image);
    }
}
