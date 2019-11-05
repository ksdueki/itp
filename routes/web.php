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

// Route::get('/', 'GenresController@index');


Route::get('/genres', 'GenresController@index');
Route::get('/genres/{genre_id}/subgenres', 'SubGenresController@index');

Route::get('/prefs', 'PrefecturesController@index');
Route::get('/prefs/{pref_code}/cities', 'CitiesController@index');
Route::get('/prefs/{pref_code}/cities/{city_code}/towns', 'TownsController@index');