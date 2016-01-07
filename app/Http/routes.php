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

use Illuminate\Http\Request;
use App\Product;

Route::pattern('id', '[1-9][0-9]*');

Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get('/product/{id}', 'FrontController@showProduct');
Route::get('/category/{id}', 'FrontController@showProductByCategory');


//Route::post('storeContact',function(Request $request){
//    var_dump($_POST);
//    dd($request->all());
//});


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
    Route::get('/contact','FrontController@showContact');
    Route::post('/storeContact','FrontController@storeContact');

});