<?php

namespace App\Http\Controllers;

use App\Providers\NewsServiceProvider;
use App\Providers\SubscriptionServiceProvider;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show news detail (the news and comments of the news)
     *
     * @param $news_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($news_id)
    {
        $news = NewsServiceProvider::show($news_id);
        $user = $news->users;

        return view('cabinet.newsDetail', compact('news', 'user'));

    }


    /**
     * Show list of news on subscriptions
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subscriptions()
    {
        $auth_id = Auth::user()->id;

        $subscription = SubscriptionServiceProvider::getListSubscription($auth_id);

        return view('cabinet.newsSubscriptions', compact('news', 'subscription'));
    }

}
