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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fishing_index/{id}', 'FishingindexController@index');
Route::get('/place_register', 'PlaceController@index');
Route::post('/place_register', 'PlaceController@register');
Route::get('/place_register_complited', 'PlaceController@complited');
Route::get('/day_fishing_edit/{id}', 'DayfishingController@index')->middleware('auth');
Route::post('/day_fishing_edit/{id}', 'DayfishingController@register')->middleware('auth');
Route::post('/day_fishing_complited/{id}', 'DayfishingController@complited')->middleware('auth');
Route::get('/select_place', 'SelectplaceController@index') -> name('select_place');
Route::resource('/place', 'SelectplaceController@search', ['only' => ['place']]);
/*
Route::get('','');
Route::post('','');*/