<?php

namespace App\Nova\Invokeables;

use Storage;

class Thumbnail
{
    public function __invoke()
    {
        return isset($this->file)
            ? $this->file->getThumbnail()
            : Storage::url('thumbnails/default.png');
    }
}
