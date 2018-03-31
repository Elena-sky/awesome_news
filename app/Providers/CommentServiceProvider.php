<?php

namespace App\Providers;

use App\Comment;
use App\Contracts\CommentInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentServiceProvider implements CommentInterface
{
    public static function createComments($request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'news_id' => $request->route('id'),
            'description' => $request->description
        ];

        Comment::create($data);

    }

    public static function getUserName($user_id)
    {
        $user = User::find($user_id);

        return $user->name;
    }

    public static function checkUser($user_id)
    {
        return ($user_id === Auth::user()->id)? true : false;
    }

    public static function deleteComments(Request $request)
    {
        $comment_id = $request->id;
        $comment = Comment::find($comment_id);
        $comment->delete();

        return true;
    }

}
