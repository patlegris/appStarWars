<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//
//    return view ('home');
//
////    return "Hello World";
//
////    return view('welcome');
//
//});

Route::get('/','FrontController@index');

//Route::get('/products', function () {
//
//    return "Je suis la liste des produits";
//
//});
//
//Route::get('posts', function(){
//    var_dump(env('DB_DATABASE','localhost2'));
//    return App\Post::all();
//});
//
//Route::get('post/{id}','FrontController@show'); //show{$id}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
