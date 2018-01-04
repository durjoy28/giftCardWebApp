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

Route::get('user/login', 'loginController@index');

Route::get('user/reg', 'loginController@reg');

Route::get('user/pass', 'loginController@change_pass');

Route::get('/catalog/{id}', [
    'uses'=>'CatalogController@catalog',
    'as'=>'catalog'
]);

Route::get('/node/{id}', [
    'uses'=>'NodeController@node',
    'as'=>'node'
]);

Route::get('/logout', 'loginController@getLogout');

Route::post('user/check','loginController@check');

Route::post('user/insert', 'loginController@add_data');

Route::post('node/insert1', 'silverController@add_data');

Route::post('node/insert2', 'goldController@add_data');

Route::post('node/insert3', 'platinumController@add_data');

Route::get('/dashboard','DashboardController@index');

Route::get('/welcome','WelcomeController@welcome')->name('welcome');