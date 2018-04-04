<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * Show all news of auth user.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = HomeServiceProvider::show();

        return view('cabinet.home', compact('news'));
    }


    /**
     * Show the form for creating a new news.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newNews()
    {
        return view('cabinet.newNews');
    }


    /**
     * Store a newly created news in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        HomeServiceProvider::create($request);

        return \redirect(route('home'));
    }


    /**
     * Show the form for editing the specified news.
     *
     * @param $news_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function showUpdate($news_id){

        if (!empty($news_id)){
            $news = HomeServiceProvider::update($news_id);
        }

        return view('cabinet.newsUpdate', compact('news'));

    }


    /**
     * Update the specified news in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveNews(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        HomeServiceProvider::put($request);

        return \redirect(route('home'));
    }


    /**
     *  Ajax.
     *  Remove the specified news from storage.
     *
     * @param Request $request
     */
    public function deleteNews(Request $request){

        if(!empty($request)){
            HomeServiceProvider::delete($request);
        }

    }


}
