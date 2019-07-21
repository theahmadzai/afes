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

Route::get('/', 'PageController@index');
Route::get('/contact', 'PageController@contact');
Route::get('/gallery', 'PageController@gallery');
Route::get('/blog', 'PageController@blog');
Route::get('/about', 'PageController@about');
Route::get('/about/chairman-message', 'PageController@about_chairmanMessage');
Route::get('/about/organizational-strategy', 'PageController@about_organizationalStrategy');
Route::get('/about/board-of-directors', 'PageController@about_boardOfDirectors');
Route::get('/about/statutes-and-by-laws', 'PageController@about_statutesAndByLaws');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
});
