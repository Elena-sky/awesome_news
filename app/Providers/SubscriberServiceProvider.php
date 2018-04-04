<?php

namespace App\Providers;

use App\Contracts\SubscriberInterface;
use App\User;
use App\Traits\SearchOfSubscribers;


class SubscriberServiceProvider implements SubscriberInterface
{
    use SearchOfSubscribers;

    /**
     * Get a list of the subscribers from the storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function getListSubscribers($user_id)
    {
        $subscribers = User::find($user_id)->subscribers()->get();

        return $subscribers;
    }

    /**
     * Check on subscribers.
     *
     * @param $user_id
     * @return bool
     */
    public static function checkOnSubscribers($user_id)
    {
        $subscribers = self::getListSubscribers($user_id);

        // Поиск авторизированного пользователя в подпищиках
        $subscr = SearchOfSubscribers::search($subscribers);

        return !empty($subscr);

    }

}
