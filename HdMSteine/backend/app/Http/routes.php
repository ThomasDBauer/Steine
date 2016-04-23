<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    
});



Route::get('/home', 'HomeController@index');

Route::get('/posts', function(){
    return view('post');
});

Route::get('/messages', 'MessageController@showMessages');

Route::auth();

Route::resource('api/post', 'PostController');

Route::resource('api/user', 'UserController');

Route::resource('api/message', 'MessageController');
