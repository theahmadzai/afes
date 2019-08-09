<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Job extends Model
{
    protected $casts = [
        'posted_at' => 'datetime',
        'closing_at' => 'datetime',
    ];

    public function scopeOpen(Builder $query)
    {
        return $query->where('status', 'Open');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
