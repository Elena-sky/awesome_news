<?php

namespace App\Providers;

use App\Contracts\HomeInterface;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeServiceProvider implements HomeInterface
{
    /**
     * Get all news of auth user.
     *
     * @return bool
     */
    public static function show()
    {
        $news = Auth::user()->news()->get();

        if(count($news)){
            return $news;
        } else {
            return false;
        }

    }


    /**
     * Store a newly created news in storage.
     *
     * @param Request $request
     */
    public static function create(Request $request)
    {
        if (!empty($request->user_id)){

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => $request->user_id
            ];

            News::create($data);
        }

    }


    /**
     * Get news for update.
     *
     * @param $news_id
     * @return mixed
     */
    public static function update($news_id)
    {
        $data = News::find($news_id);

        return $data;
    }


    /**
     * Update the specified news in storage.
     *
     * @param Request $request
     */
    public static function put(Request $request)
    {
        $news_id = $request->route('id');
        $data = [
            'title' => $request->title,
            'description' => $request->description
        ];

        $news = News::find($news_id);
        $news->update($data);
    }


    /**
     * Remove the specified news from storage.
     *
     * @param Request $request
     * @return bool
     */
    public static function delete(Request $request)
    {
        $news_id = $request->id;

        $news = News::find($news_id);
        $news->delete();

        return true;
    }

}
