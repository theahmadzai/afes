<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Imagify;

class Slide extends Model
{
    use Imagify;

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
