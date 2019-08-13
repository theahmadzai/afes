<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    protected $casts = [
        'birth_date' => 'date',
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
