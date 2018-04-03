<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait SearchOfSubscribers
{

    public static function search($subscribers)
    {
        $user = Auth::user()->id;
        $subscr = null;
        foreach($subscribers as $item) {
            if ($user == $item->subscriber) {
                $subscr = $item;
                break;
            }
        }

        return $subscr;
    }

}