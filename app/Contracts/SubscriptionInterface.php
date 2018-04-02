<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface SubscriptionInterface
{
    public static function addSubscription($user_id);

    public static function getListSubscription($user_id);

}