<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $news = News::all();


        return view('index', compact('news'));
    }
}
