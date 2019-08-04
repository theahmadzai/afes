<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $casts = [
        'date_posted' => 'datetime',
        'closing_date' => 'datetime',
    ];
}
