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

Route::get('/car/rent/{car_id}', [
  'as' => 'car.rent',
  'uses' => 'CarController@rent'
]);

Route::get('/car/rent/add/{car_id}', [
  'as' => 'car.addname',
  'uses' => 'CarController@addname'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
