<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'trails_end_at' => 'datetime',
        'ends_at' => 'datetime',
        'birth_date' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function getGravatarAttribute()
    {
        return $this->avatar ?? 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?s=300';
    }

    public function identities()
    {
        return $this->hasMany(SocialIdentity::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

   public function logins()
   {
       return $this->hasMany(Login::class);
   }
}
