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
Route::get('/{locale?}', 'PlacesController@show')->name('places');
Route::get('/rate', 'PlacesController@rate')->name('rate');
Route::prefix('places')->group(function() {
    Route::get('/{placeId}/like', 'GradesController@placeLike')->name('place_like');
    Route::get('/{placeId}/dislike', 'GradesController@placeDislike')->name('place_dislike');
    Route::get('/create', 'PlacesController@form')->name('create');
    Route::post('/create', 'PlacesController@create')->name('post_create');
    Route::get('/{id}', 'PlacesController@detail')->name('detail');
    Route::get('/{id}/photos/add', 'PlacesController@photo')->name('photo_add');
    Route::post('/{id}/photos/add', 'PlacesController@add')->name('photo_form');
});
Route::prefix('pictures')->group(function() {
    Route::get('/{photoId}/{placeId}/like', 'GradesController@pictureLike')->name('photo_like');
    Route::get('/{photoId}/{placeId}/dislike', 'GradesController@pictureDislike')->name('photo_dislike');
    Route::middleware('photoAdd')->group(function() {
        Route::get('/add', 'PictureController@create')->name('photo_add_places');
        Route::post('/add', 'PictureController@add_with_places')->name('photo_form_places');
    });
});


