<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\User;
use Illuminate\Support\ServiceProvider;

class SubscriberServiceProvider implements SubscriberInterface
{
    public static function getListSubscribers($user_id)
    {
        $subscribers = User::find($user_id)->subscribers()->get();

        return $subscribers;
    }

}
