<?php
ini_set('debug.max_nesting_level', 200);


use App\Category;
use Illuminate\Http\Request;
use App\Product;

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


Route::pattern('id', '[1-9][0-9]*');
Route::pattern('slug', '[a-z_]+');

Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get('/product/{id}', 'FrontController@showProduct');
Route::get('/category/{id}', 'FrontController@showProductByCategory');




Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/contact','FrontController@showContact');
    Route::post('/storeContact','FrontController@storeContact');

});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
    Route::get('/category/{id}', 'FrontController@showProductByCategory');
    Route::get('/product/{id}', 'FrontController@showProduct');
    Route::post('command', 'FrontController@command');

    Route::get('contact', 'FrontController@showContact');
    Route::post('storeContact', 'FrontController@storeContact');

    // limit 60 requests per one minute from a single address IP, throttle
    Route::group(['middleware' => ['throttle:60,1']], function () {
        Route::any('login', 'LoginController@login');
    });

    Route::get('logout', 'LoginController@logout');

    Route::group([
        'middleware' => ['auth']], function () {
        Route::resource('product', 'Admin\ProductController');
//        Route::get('dashboard', 'Admin\DashboardController@index');
    });
});

/* ------------------------------------------------- *\
    Container de service
\* ------------------------------------------------- */


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
