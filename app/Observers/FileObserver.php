<?php

namespace App\Observers;

use App\File;

class FileObserver
{
    public function creating(File $file)
    {
        if ($file->fileable === 'App\Image') {
            $file->createThumbnail(200, 200);
        }
    }

    public function updating(File $file)
    {
        if ($file->fileable === 'App\Image') {
            $file->createThumbnail(200, 200);
        }
    }
}
