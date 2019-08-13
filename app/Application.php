<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'marital_status',
        'birth_date',
        'cnic',
        'city',
        'address',
        'contact_number',
        'email',
        'about_us'
    ];

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
