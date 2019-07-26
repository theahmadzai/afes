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

Route::get('/', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@mail');
Route::get('/gallery', 'GalleryController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{post}', 'BlogController@post');
Route::get('/about', 'PageController@about');
Route::get('/about/chairman-message', 'PageController@about_chairmanMessage');
Route::get('/about/organizational-strategy', 'PageController@about_organizationalStrategy');
Route::get('/about/board-of-directors', 'PageController@about_boardOfDirectors');
Route::get('/about/statutes-and-by-laws', 'PageController@about_statutesAndByLaws');
Route::get('/donate', 'PageController@donate');
