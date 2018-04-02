<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\Contracts\SubscriptionInterface;
use App\Subscriber;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider implements SubscriptionInterface
{
    public static function addSubscription($user_id)
    {
        $data = [
            'subscriber' => Auth::user()->id,
            'user_id' => $user_id
        ];

        Subscriber::create($data);

        return true;
    }

//    public static function checkOnSubscription($user_id)
//    {
//        if(!empty($user_id)){
//            Subscriber::
//        }
//
//    }

    public static function getListSubscription($user_id)
    {
        $subscription = User::find($user_id)->subscription()->get();

        return $subscription;


    }


}
