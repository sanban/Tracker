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


Route::get('/','TrackersController@index');

Route::get('/{type}','TrackersController@create');

Route::post('/{type}','TrackersController@store');

Route::get('/stats/{type}','TrackersController@showStats');

Route::get('/stats/{type}/{id}','TrackersController@showIndividualStats');

Route::get('/{type}/{id}','TrackersController@record');

//Route::get('/check','TrackersController@check');