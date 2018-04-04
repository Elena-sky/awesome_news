<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface HomeInterface
{

    /**
     * Get all news of auth user.
     *
     * @return mixed
     */
    public static function show();


    /**
     * Store a newly created news in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public static function create(Request $request);


    /**
     * Get news for update.
     *
     * @param $news_id
     * @return mixed
     */
    public static function update($news_id);


    /**
     * Update the specified news in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public static function put(Request $request);


    /**
     * Remove the specified news from storage.
     *
     * @param Request $request
     * @return mixed
     */
    public static function delete(Request $request);

}