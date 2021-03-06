<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/bicycles', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bicycles','BicycleController@index');
Route::get('/bicycles/create','BicycleController@create');
Route::post('/bicycles/','BicycleController@store');
Route::get('/bicycles/{bicycle}/edit','BicycleController@edit');
Route::put('/bicycles/{bicycle}', 'BicycleController@update');
Route::delete('/bicycles/{bicycle}', 'BicycleController@destroy');
Route::get('/bicycles/{bicycle}','BicycleController@show');


Route::get('/countries','CountryController@index');
Route::get('/countries/create','CountryController@create');
Route::post('/countries/','CountryController@store');
Route::get('/countries/{country}/edit','CountryController@edit');
Route::put('/countries/{country}', 'CountryController@update');
Route::delete('/countries/{country}', 'CountryController@destroy');
Route::get('/countries/{country}','CountryController@show');
