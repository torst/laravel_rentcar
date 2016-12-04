<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/car', 'CarController@checkdate');

Route::get('/information', 'CarController@information');

Route::get('/information/details/{car_id}', [
  'as' => 'car.details',
  'uses' => 'CarController@details'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');
