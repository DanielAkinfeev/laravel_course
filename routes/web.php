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

Route::get('/id{id?}', 'UserController@show')->where(['id' => '[0-9]+']);
Route::get('/form', function(){
   return view('form');
});
Route::post('/form', function(){
   return view('accept');
});
Route::get('/', 'TaskController@show');
Route::get('/tasks/{id}', 'TaskController@inc')->where(['id' => '[0-9]+']);

Route::get('/queue', 'LogsController@show');
Route::get('/get', 'LogsController@takeFirstLog');