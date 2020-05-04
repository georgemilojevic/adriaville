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

Route::get('/', 'HomePageController@index');
Route::get('/contact', 'HomePageController@contact');
Route::get('property/{id}', 'PropertiesController@show');

Route::get('/search', 'HomePageController@searchProperties')->name('searchProperties');
Route::post('/search', 'HomePageController@search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
