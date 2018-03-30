<?php

namespace App\Http\Controllers;

use App\Providers\NewsServiceProvider;


class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($news_id)
    {
        $news = NewsServiceProvider::show($news_id);

        return view('cabinet.newsDetail', compact('news'));

    }


}
