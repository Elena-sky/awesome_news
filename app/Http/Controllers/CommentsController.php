<?php

namespace App\Http\Controllers;

use App\Providers\CommentServiceProvider;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(Request $request)
    {
        $news_id = $request->route('id');
        CommentServiceProvider::createComments($request);

        return \redirect(route('showNews', compact('news_id')));
    }

    public function deleteComment(Request $request)
    {
        if(!empty($request)){
            CommentServiceProvider::deleteComments($request);
        }

    }
}
