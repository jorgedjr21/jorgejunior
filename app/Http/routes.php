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
        $api->get('users/{ukey}/devices',['as'=>'api.devices','uses'=>'App\API\Controllers\DeviceController@getDevices']);
        $api->get('users/{ukey}/devices/{dkey}',['as'=>'api.devices','uses'=>'App\API\Controllers\DeviceController@getDevice']);
    });





    Route::group(['middleware' => ['web']], function () {
        //

        Route::get('/',['uses'=>'UserController@welcomepage']);

        Route::get('/login',['as'=>'user.loginpage','uses'=>'UserController@loginpage']);

        Route::post('/login',['as'=>'users.login','uses'=>'UserController@login']);



        Route::get('/register',['as'=>'user.registerpage','uses'=>'UserController@registerpage']);

        Route::post('/register',['as'=>'user.register','uses'=>'UserController@register']);

    });

    Route::group(['middleware'=>['web','auth']],function(){
        Route::get('/dashboard',['as'=>'user.dashboard','uses'=>'UserController@dashboard']);

        Route::get('/logout',['as'=>'user.logout','uses'=>'UserController@logout']);

        Route::get('/profile',['as'=>'user.profile','uses'=>'UserController@profile']);

        /** DEVICES ROUTES **/
        Route::get('/devices',['as'=>'device.listall','uses'=>'DeviceController@index']);

        Route::get('/devices/new',['as'=>'device.newdevice','uses'=>'DeviceController@newDevice']);

        Route::post('/devices/new',['as'=>'device.savedevice','uses'=>'DeviceController@saveDevice']);
        
        Route::get('/devices/{device_id}/edit',['as'=>'device.editform','uses'=>'DeviceController@editForm']);

        Route::put('/devices/{device_id}/edit',['as'=>'device.saveedit','uses'=>'DeviceController@saveEdit']);

        Route::delete('/devices/{device_id}/delete',['as'=>'device.delete','uses'=>'DeviceController@delete']);

        /**DEVICES STREAM ROUTES **/
        Route::get('devices/{device_id}/streams',['as'=>'device.getStreams','uses'=>'StreamController@getStreams']);
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
