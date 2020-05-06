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


Route::resource('restaurant', 'RestaurantController');





Route::get('/restaurant/show/{id}','RestaurantController@show');
Route::get('/restaurant/edit/{id}','RestaurantController@edit');
Route::post('/restaurant/edit/{id}','RestaurantController@update');


Route::get('/restaurant/create', 'RestaurantController@create');

Route::post('/restaurant/create', 'RestaurantController@store');





