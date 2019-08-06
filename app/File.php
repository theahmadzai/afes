<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Imageify;

class File extends Model
{
    use SoftDeletes, Imageify;

    public function fileable()
    {
        return $this->morphTo();
    }
}
