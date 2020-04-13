<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Imagify;
use Storage;

class Image extends Model
{
    use softDeletes;

    protected $fillable = [
        'filename'
    ];

    private function imagePathFor($type) {
        $image = "{$type}/{$this->filename}";

        if(!Storage::disk('public')->exists($image)) {
            $image = "{$type}/default.png";
        }

        return Storage::disk('public')->url($image);
    }

    public function getThumbnailPathAttribute()
    {
        return $this->imagePathFor('thumbnails');
    }

    public function getImagePathAttribute()
    {
        return $this->imagePathFor('images');
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
