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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Things
 */
Route::get('things', 'ThingsController@index');
Route::get('things/create', 'ThingsController@create');
Route::patch('things/{thing}/edit', 'ThingsController@update');
Route::get('things/{thing}/edit', 'ThingsController@edit');
Route::get('things/{thing}', 'ThingsController@show');
Route::delete('things/{thing}', 'ThingsController@destroy');
Route::post('things', 'ThingsController@store');

/**
 * Api
 */
Route::get('api/things', 'ThingsController@apiIndex');

/**
 * Users
 */
Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
