<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\User;
use App\Traits\SearchOfSubscribers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;


class SubscriberServiceProvider implements SubscriberInterface
{
    use SearchOfSubscribers;

    public static function getListSubscribers($user_id)
    {
        $subscribers = User::find($user_id)->subscribers()->get();

        return $subscribers;
    }

    public static function checkOnSubscribers($user_id)
    {
        $subscribers = self::getListSubscribers($user_id);

        // Поиск авторизированного пользователя в подпищиках
        $subscr = SearchOfSubscribers::search($subscribers);

        return !empty($subscr);

    }

}
