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

$api = app('Dingo\Api\Routing\Router');





$api->version('v1', function ($api) {

    $api->get('test1', function () {
        return 'It is ok';
    });
    $api->get('firstController',"App\Http\Controllers\ApiController@create");
    $api->get('attachUser/{userId}/roles/{role}','App\Http\Controllers\HomeController@attachUserRole');
    $api->get('getRole/{userId}','App\Http\Controllers\HomeController@getRole');
    $api->post('role/permisoon/add' ,'App\Http\Controllers\HomeController@attachPermission');
    $api->get('{role}/permisoons' ,'App\Http\Controllers\HomeController@getPermission');
});

Route::get('/', function () {
    return view('welcome');
});
