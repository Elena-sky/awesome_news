<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'id', 'news_id', 'user_id', 'description', 'created_at'
    ];

    public function news()
    {
        return $this->belongsTo('App\News', 'news_id');
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
