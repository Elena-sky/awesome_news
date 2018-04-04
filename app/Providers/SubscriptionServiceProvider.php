<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\Contracts\SubscriptionInterface;
use App\Traits\SearchOfSubscribers;
use App\Subscriber;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider implements SubscriptionInterface
{
    use SearchOfSubscribers;


    /**
     * Store a newly created subscription in storage.
     *
     * @param $user_id
     * @return bool
     */
    public static function addSubscription($user_id)
    {
        $data = [
            'subscriber' => Auth::user()->id,
            'user_id' => $user_id
        ];

        Subscriber::create($data);

        return true;
    }


    /**
     * Get a list of the subscription from the storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function getListSubscription($user_id)
    {
        $subscription = User::find($user_id)->subscription()->get();

        return $subscription;

    }


    /**
     * Remove the specified subscription from storage.
     *
     * @param $user_id
     * @return bool
     */
    public static function deleteSubscription($user_id)
    {
        $subscribers = SubscriberServiceProvider::getListSubscribers($user_id);
        $data = SearchOfSubscribers::search($subscribers);

        $subscription = Subscriber::find($data->id);
        $subscription->delete();

        return true;
    }


}
