<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

class File extends Model
{
    use softDeletes;

    protected $fillable = [
        'filename'
    ];

    public function fileable()
    {
        return $this->morphTo();
    }
}
