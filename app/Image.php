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

    public function getThumbnailPathAttribute()
    {
        return Storage::disk('public')->url('thumbnails/' . $this->filename);
    }

    public function getImagePathAttribute()
    {
        return Storage::disk('public')->url('images/' . $this->filename);
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
