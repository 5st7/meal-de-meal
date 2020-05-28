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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'MealController@index');

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/foodrecode', function () {
    return view('foodrecode');
});

Route::post('/', 'MealController@use_meal');
Route::post('/foodrecode', 'MealController@store');
Route::get('/alert','MealController@index');
