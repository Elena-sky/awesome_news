<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'id', 'news_id', 'user_id', 'description', 'created_at'
    ];

    /**
     *  comments.news_id == news.id
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function news()
    {
        return $this->belongsTo('App\News', 'news_id');
    }

    /**
     *  comments.user_id == user.id
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
