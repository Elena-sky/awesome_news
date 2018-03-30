<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface NewsInterface
{

    public static function show($news_id);


}