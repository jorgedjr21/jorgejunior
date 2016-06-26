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



Route::group(['domain'=>'www.'.config('app.url')],function(){

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::group(['domain'=>config('app.url')],function(){

    Route::get('/', function () {
        return view('welcome');
    });
});

Route::group(['domain'=>'tfg.'.config('app.url')],function(){

    $api = app('Dingo\Api\Routing\Router');

    $api->version('v1', function ($api) {
        $api->get('users/{user_id}', 'App\API\Controllers\UserController@show');
    });

    Route::get('/',function(){
        return view('tfg');
    });

    Route::group(['middleware' => ['web']], function () {
        //
        Route::get('/login',['as'=>'user.loginpage','uses'=>'UserController@loginpage']);

        route::post('/login',['as'=>'users.login','uses'=>'UserController@login']);
    });

});

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
