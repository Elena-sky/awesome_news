<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Show list of news
Route::get('/home', 'HomeController@show')->name('home'); // Home page of user

// Add news
Route::get('/home/new-news', 'HomeController@newNews')->name('newNews'); // view
Route::post('/home/news/add', 'HomeController@create')->name('addNews'); // action

// Update news
Route::get('/home/news/update/{id}', 'HomeController@showUpdate')->name('updateNews'); // view
Route::put('/home/news/update/save/{id}', 'HomeController@saveNews')->name('newsSave'); // action

//Delete news
Route::delete('/home/news/delete', 'HomeController@deleteNews')->name('newsDelete'); // action