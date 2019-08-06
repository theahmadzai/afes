<?php

namespace App\Observers;

use App\File;
use Storage;

class FileObserver
{
    public function created(File $file)
    {

        // if ($file->fileable === 'App\Image') {
            $file->createThumbnail(200, 200);
        // }
    }

    public function updated(File $file)
    {
        if ($file->fileable === 'App\Image') {
            $file->createThumbnail(200, 200);
        }
    }
}
