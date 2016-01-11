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

Route::pattern('id', '[1-9][0-9]*');
Route::pattern('slug', '[a-z_]+');

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
        Route::get('dashboard', 'Admin\DashboardController@index');
    });
});

/* ------------------------------------------------- *\
    Container de service
\* ------------------------------------------------- */

class Foo
{
}

$foo = new Foo;

class Bar
{
    private $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}


//var_dump(App::make('Bar'));


class Ip
{


    private $ip;
    private $uniqid;

    /**
     * @param $ip
     */
    public function __construct($ip)
    {

        $this->ip = $ip;

        $this->uniqid = uniqid();
    }

}

App::bind('Ip', function ($app) {
    return new Ip($app->make('request')->getClientIp());
});

//App::singleton('Ip', function ($app) {
//    return new Ip($app->make('request')->getClientIp());
//});


//var_dump(App::make('Ip'));
//var_dump(App::make('Ip'));
//var_dump(App::make('Ip'));


Route::get('test', function (Ip $ip) {
    dd($ip);
});


/* ------------------------------------------------- *\
    Inversion of control
\* ------------------------------------------------- */

App::bind('App\Cache\ICache', 'App\Cache\CacheFile');


Route::get('test2', function (App\Cache\ICache $cache) {
    dd($cache);
});

/* ------------------------------------------------- *\
    Use Interface framework
\* ------------------------------------------------- */

Route::get('test3', function (Illuminate\Contracts\Cache\Repository $cache) {
    dd($cache);
});

/* ------------------------------------------------- *\
    Service provider
\* ------------------------------------------------- */

// winner customer
Route::get('test4', function (App\Score\IScore $score) {
    dd($score->get(100));
});
