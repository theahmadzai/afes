<?php

namespace App\Observers;

use App\Traits\Thumbnail;
use App\File;
use Storage;

class FileObserver
{
    use Thumbnail;

    public function created(File $file)
    {
        static::createThumbnail($file, 200, 200);
    }

    public function updated(File $file)
    {
        static::createThumbnail($file, 200, 200);
    }
}
