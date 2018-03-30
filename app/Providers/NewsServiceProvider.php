<?php

namespace App\Providers;

use App\Contracts\NewsInterface;
use App\News;
use Illuminate\Http\Request;


class NewsServiceProvider implements NewsInterface
{
    public static function show($news_id)
    {
        return News::find($news_id);
    }

}
