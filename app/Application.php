<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $casts = [
        'date_of_birth' => 'datetime',
    ];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
