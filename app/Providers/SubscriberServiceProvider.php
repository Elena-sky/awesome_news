<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class SubscriberServiceProvider implements SubscriberInterface
{
    public static function getListSubscribers($user_id)
    {
        $subscribers = User::find($user_id)->subscribers()->get();

        return $subscribers;
    }

    public static function checkOnSubscribers($user_id)
    {
        $subscribers = self::getListSubscribers($user_id);

        $user = Auth::user()->id;

        // Поиск авторизированного пользователя в подпищиках
        $subscr = null;
        foreach($subscribers as $item) {
            if ($user == $item->subscriber) {
                $subscr = $item;
                break;
            }
        }

        return !empty($subscr);

    }

}
