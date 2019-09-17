<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Imagify;
use Storage;

class Image extends Model
{
    use Imagify;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
