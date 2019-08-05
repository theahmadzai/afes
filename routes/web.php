<?php

use App\Http\Controllers\{
    ContactController,
    GalleryController,
    PostController,
    MembershipController,
    JobController,
};

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

/**
 * Laravel Routes
 */
Auth::routes();

/**
 * Controller Routes
 */
Route::get('/', HomeController::class);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'mail']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/membership', [MembershipController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{title}', [JobController::class, 'show']);

/**
 * View Routes
 */
Route::view('/about/chairman-message', 'about.chairman-message');
Route::view('/about/organizational-strategy', 'about.organizational-strategy');
Route::view('/about/board-of-directors', 'about.board-of-directors');
Route::view('/about/statutes-and-by-laws', 'about.statutes-and-by-laws');
Route::view('/donate', 'donate');

/**
 * Redirect Routes
 */
Route::redirect('/about', 'about/chairman-message');
