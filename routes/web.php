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

URL::forceScheme('https');

Route::post('/', 'CatController@index');
Route::get('/', 'CatController@index');

Route::post('/new', 'CatController@newSort');
Route::post('/popularity', 'CatController@popularitySort');

Route::post('/good', 'CatController@good');
Route::get('/good', 'CatController@good');
Route::post('/inputRegist', 'CatController@inputRegist');

Route::post('/regist', 'CatController@regist');