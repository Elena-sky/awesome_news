<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface SubscriberInterface
{
    public static function getListSubscribers($user_id);


}