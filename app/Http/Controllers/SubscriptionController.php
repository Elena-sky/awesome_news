<?php

namespace App\Http\Controllers;

use App\Providers\SubscriberServiceProvider;
use App\Providers\SubscriptionServiceProvider;
use App\User;
use Illuminate\Http\Request;


class SubscriptionController extends Controller
{
    /**
     * @param Request $request
     */
    public function add(Request $request)
    {
        if(!empty($request->id)){
            SubscriptionServiceProvider::addSubscription($request->id);

        }
    }

    /**
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subscription($user_id)
    {
        if(!empty($user_id)){
            $subscription = SubscriptionServiceProvider::getListSubscription($user_id);

        }
        $user = User::find($user_id);
        return view('cabinet.showSubscription', compact('subscription', 'user'));

    }

    /**
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subscribers($user_id)
    {
        if(!empty($user_id)){
            $subscribers = SubscriberServiceProvider::getListSubscribers($user_id);

        }

        $user = User::find($user_id);

        return view('cabinet.showSubscribers', compact('subscribers', 'user'));
    }

    /**
     *
     * @param Request $request
     */
    public function unsubscribe(Request $request)
    {
        if(!empty($request->id))
        {
            SubscriptionServiceProvider::deleteSubscription($request->id);
        }
    }


}
