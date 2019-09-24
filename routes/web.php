<?php

use App\Http\Controllers\{
    ContactController,
    GalleryController,
    PostController,
    JobController,
    ApplicationController,
    SubscriberController,
    MembershipController,
    MembersController,
    Profile\ProfileController,
    Profile\Settings\GeneralController,
    Profile\Settings\SecurityController,
    Profile\Settings\AccountsController,
    Profile\Settings\NotificationsController,
    Profile\Settings\BillingController,
    Profile\Settings\SubscriptionsController,
    Auth\SocialIdentityController,
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

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'mail']);

Route::get('gallery', [GalleryController::class, 'index']);

Route::get('blog', [PostController::class, 'index']);
Route::get('blog/{post}', [PostController::class, 'show']);

Route::get('jobs', [JobController::class, 'index']);
Route::get('jobs/{job}', [JobController::class, 'show']);
Route::get('jobs/{job}/apply', [ApplicationController::class, 'create']);
Route::post('jobs/{job}/apply', [ApplicationController::class, 'store']);

Route::get('/subscribe', [SubscriberController::class, 'create']);
Route::post('/subscribe', [SubscriberController::class, 'store']);

Route::get('membership', [MembershipController::class, 'index']);
Route::post('membership', [MembershipController::class, 'subscribe']);
Route::get('membership/success', [MembershipController::class, 'success']);
Route::get('membership/cancel', [MembershipController::class, 'cancel']);

Route::get('members', [MembersController::class, 'index']);

Route::get('login/{provider}', [SocialIdentityController::class, 'redirectToProvider']);
Route::get('login/{provider}/callback', [SocialIdentityController::class, 'handleProviderCallback']);

Route::get('profile/{user}', [ProfileController::class, 'index']);
Route::get('profile/settings/general', [GeneralController::class, 'index']);
Route::post('profile/settings/general', [GeneralController::class, 'update']);
Route::get('profile/settings/security', [SecurityController::class, 'index']);
Route::post('profile/settings/security', [SecurityController::class, 'update']);
Route::get('profile/settings/accounts', [AccountsController::class, 'index']);
Route::post('profile/settings/accounts', [AccountsController::class, 'update']);
Route::get('profile/settings/notifications', [NotificationsController::class, 'index']);
Route::post('profile/settings/notifications', [NotificationsController::class, 'update']);
Route::get('profile/settings/billing', [BillingController::class, 'index']);
Route::post('profile/settings/billing', [BillingController::class, 'update']);
Route::get('profile/settings/subscriptions', [SubscriptionsController::class, 'index']);

/**
 * View Routes
 */
Route::view('about/chairman-message', 'about.chairman-message');
Route::view('about/organizational-strategy', 'about.organizational-strategy');
Route::view('about/board-of-directors', 'about.board-of-directors');
Route::view('about/statutes-and-by-laws', 'about.statutes-and-by-laws');
Route::view('donate', 'donate.index');

/**
 * Redirect Routes
 */
Route::redirect('about', 'about/chairman-message');
