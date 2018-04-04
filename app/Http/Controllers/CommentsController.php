<?php

namespace App\Http\Controllers;

use App\Providers\CommentServiceProvider;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     *  Create comments
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        $news_id = $request->route('id');
        CommentServiceProvider::createComments($request);

        return \redirect(route('showNews', compact('news_id')));
    }


    /**
     *  Delete comments
     *
     * @param Request $request
     */
    public function deleteComment(Request $request)
    {
        if(!empty($request)){
            CommentServiceProvider::deleteComments($request);
        }
    }

}
