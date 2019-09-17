<?php

namespace App\Observers\Traits;

use Intervention\Image\Facades\Image as InterventionImage;
use App\File;
use Storage;

trait Thumbnailer
{
    public static $imageables = [
        \App\Image::class,
        \App\Slide::class,
        \App\Post::class,
    ];

    public static function createThumbnail(File $file, $x = 300, $y = 150)
    {
        if (in_array($file->fileable_type, self::$imageables)) {
            $image = InterventionImage::make(public_path(Storage::url($file->filename)))->fit($x, $y, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->encode();

            Storage::disk('public')->put('thumbnails/' . basename($file->filename), $image);
        }
    }
}
