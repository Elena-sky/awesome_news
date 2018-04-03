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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

// Show list of news
Route::get('/home', 'HomeController@show')->name('home'); // Home page of user

// Add news
Route::get('/home/new-news', 'HomeController@newNews')->name('newNews'); // view
Route::post('/home/news/add', 'HomeController@create')->name('addNews'); // action

// Update news
Route::get('/home/news/update/{id}', 'HomeController@showUpdate')->name('updateNews'); // view
Route::put('/home/news/update/save/{id}', 'HomeController@saveNews')->name('newsSave'); // action

// AJAX delete news
Route::delete('/home/news/delete', 'HomeController@deleteNews')->name('newsDelete'); // action


// Show profile of user
Route::get('/user/{id}', 'UsersController@profile')->name('showProfile'); // view

// Show news detail with comments
Route::get('/news/{id}', 'NewsController@show')->name('showNews'); // view

// Create comment for news
Route::post('/news/{id}/comments/create', 'CommentsController@create')->name('createComment'); // action

// AJAX delete comment
Route::delete('/comment/delete', 'CommentsController@deleteComment')->name('commentDelete'); // action



// AJAX add subscription
Route::post('/subscription/add', 'SubscriptionController@add')->name('addSubscription'); // action


// AJAX unsubscribe
Route::post('/unsubscription', 'SubscriptionController@unsubscribe')->name('unsubscription'); // action

// Show list subscriptions
Route::get('/user/{id}/subscriptions', 'SubscriptionController@subscription')->name('showSubscription'); // view

// Show list subscribers
Route::get('/user/{id}/subscribers', 'SubscriptionController@subscribers')->name('showSubscribers'); // view

// Show news of subscriptions
Route::get('/subscriptions/news', 'NewsController@subscriptions')->name('newsOfSubscriptions'); // view