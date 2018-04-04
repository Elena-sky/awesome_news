<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display index page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $news = News::query()
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('index', compact('news'));
    }
}
