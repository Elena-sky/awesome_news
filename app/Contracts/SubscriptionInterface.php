<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface SubscriptionInterface
{
    /**
     * Store a newly created subscription in storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function addSubscription($user_id);


    /**
     *  Get a list of the subscription from the storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function getListSubscription($user_id);


    /**
     * Remove the specified subscription from storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function deleteSubscription($user_id);


}