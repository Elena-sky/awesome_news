<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface NewsInterface
{

    /**
     * Get data of the specified news.
     *
     * @param $news_id
     * @return mixed
     */
    public static function show($news_id);


}