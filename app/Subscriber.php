<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscriber';
    protected $fillable = [
        'id', 'subscriber', 'user_id', 'created_at'
    ];

    public function getUser()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getSubscriber()
    {
        return $this->belongsTo('App\User', 'subscriber');
    }

}
