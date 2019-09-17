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

    public function getResumeAttribute()
    {
        return 'files/' . basename($this->filename);
    }

    public function fileable()
    {
        return $this->morphTo();
    }
}
