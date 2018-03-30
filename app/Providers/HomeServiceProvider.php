<?php

namespace App\Providers;

use App\Contracts\HomeInterface;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider implements HomeInterface
{
    public static function show()
    {

        return $news = News::all();

    }

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



    public static function update($news_id)
    {
        $data = News::find($news_id);

        return $data;
    }

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

    public static function delete(Request $request)
    {
        $news_id = $request->id;
        $news = News::find($news_id);
        $news->delete();

        return true;
    }


}
