<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function news()
    {
        return $this->hasMany('App\News', 'user_id');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id');
    }


    public function subscribers()
    {
        return $this->hasMany('App\Subscriber', 'user_id');
    }

    public function subscription()
    {
        return $this->hasMany('App\Subscriber', 'subscriber');
    }

}
