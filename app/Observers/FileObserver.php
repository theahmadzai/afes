<?php

namespace App\Observers;

use App\Observers\Traits\Thumbnailer;
use App\File;

class FileObserver
{
    use Thumbnailer;

    public function created(File $file)
    {
        static::createThumbnail($file, 200, 200);
    }

    public function updated(File $file)
    {
        static::createThumbnail($file, 200, 200);
    }
}
