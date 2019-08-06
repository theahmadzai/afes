<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
