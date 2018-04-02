<?php

namespace App\Http\Controllers;

use App\Providers\SubscriptionServiceProvider;
use App\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function add(Request $request)
    {
        if(!empty($request->id)){
            SubscriptionServiceProvider::addSubscription($request->id);

        }
    }

    public function subscription($user_id)
    {
        if(!empty($user_id)){
            $subscription = SubscriptionServiceProvider::getListSubscription($user_id);

        }
        $user = User::find($user_id);
        return view('cabinet.showSubscription', compact('subscription', 'user'));

    }

}
