<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface CommentInterface
{

    /**
     * Store a new comment in storage.
     *
     * @param $request
     * @return mixed
     */
    public static function createComments($request);


    /**
     * Search the user in storage.
     *
     * @param $user_id
     * @return mixed
     */
    public static function getUserName($user_id);


    /**
     * Check auth of user.
     *
     * @param $user_id
     * @return mixed
     */
    public static function checkUser($user_id);


    /**
     * Remove the specified comment from storage.
     *
     * @param Request $request
     * @return mixed
     */
    public static function deleteComments(Request $request);

}
