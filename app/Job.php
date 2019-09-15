<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Job extends Model
{
    protected $casts = [
        'closing_at' => 'datetime',
        'posted_at' => 'datetime',
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
