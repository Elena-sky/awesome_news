<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface SubscriberInterface
{
    /**
     * Get a list of the subscribers from the storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function getListSubscribers($user_id);

    /**
     * Check on subscribers.
     *
     * @param $user_id
     * @return mixed
     */
    public static function checkOnSubscribers($user_id);


}