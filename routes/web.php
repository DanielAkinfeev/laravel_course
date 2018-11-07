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
Route::get('/', 'PlacesController@show')->name('places');
Route::prefix('places')->group(function() {
    Route::get('/create', 'PlacesController@form')->name('create');
    Route::post('/create', 'PlacesController@create')->name('post_create');
    Route::get('/{id}', 'PlacesController@detail')->name('detail');
    Route::get('/{id}/photos/add', 'PlacesController@photo')->name('photo_add');
    Route::post('/{id}/photos/add', 'PlacesController@add')->name('photo_form');
});
Route::prefix('photos')->group(function() {
    Route::middleware('photoAdd')->group(function() {
        Route::get('/add', 'PlacesController@photo_add')->name('photo_add_places');
        Route::post('/add', 'PlacesController@add_with_places')->name('photo_form_places');
    });
});

