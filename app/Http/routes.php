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
Route::pattern('slug', '[a-z_]*');

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
    Route::get('cat/{id}/{slug?}', 'FrontController@showProductByCategory');
    Route::get('prod/{id}/{slug?}', 'FrontController@showProduct');

    Route::get('/contact', 'FrontController@showContact');
    Route::post('/storeContact', 'FrontController@storeContact');

    Route::post('command', 'FrontController@command');

    Route::get('contact', 'FrontController@showContact');
    Route::post('storeContact', 'FrontController@storeContact');

    Route::get('logout', 'LoginController@logout');

    // limit 60 requests per one minute from a single address IP, throttle
    Route::group(['middleware' => ['throttle:60,1']], function () {
        Route::any('login', 'LoginController@login');
    });


    Route::group([
        'middleware' => ['auth']], function () {
        Route::resource('product', 'ProductController');
//        Route::get('dashboard', 'DashboardController@index');
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
