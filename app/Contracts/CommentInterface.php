<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface CommentInterface
{

    public static function createComments($request);

    public static function getUserName($user_id);

    public static function checkUser($user_id);

    public static function deleteComments(Request $request);

}
