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
Route::get('/', 'PlacesController@show');
Route::get('/places', 'PlacesController@show');
Route::get('/places/create', 'PlacesController@form');
Route::post('/places/create', 'PlacesController@create');
Route::get('/places/{id}', 'PlacesController@detail');
Route::get('/places/{id}/photos/add', 'PlacesController@photo');
Route::post('/places/{id}/photos/add', 'PlacesController@add');