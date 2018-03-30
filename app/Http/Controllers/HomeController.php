<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\HomeInterface;
use App\Providers\HomeServiceProvider;



class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $news = HomeServiceProvider::show();


        return view('cabinet.home', compact('news'));
    }


    public function newNews()
    {
        return view('cabinet.newNews');
    }


    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        HomeServiceProvider::create($request);

        return \redirect(route('home'));
    }

    public static function showUpdate($news_id){

        if (!empty($news_id)){
            $news = HomeServiceProvider::update($news_id);
        }

        return view('cabinet.newsUpdate', compact('news'));

    }

    public function saveNews(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        HomeServiceProvider::put($request);

        return \redirect(route('home'));
    }


    public function deleteNews(Request $request){

        if(!empty($request)){
            HomeServiceProvider::delete($request);
        }

    }

}
