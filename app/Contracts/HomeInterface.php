<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface HomeInterface
{

    public static function show();

    public static function create(Request $request);

    public static function update($news_id);

    public static function put(Request $request);

    public static function delete($news_id);
}