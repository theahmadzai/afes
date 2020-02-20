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
Auth::routes(['verify' => true]);

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

Route::get('/subscribe', [SubscriberController::class, 'index']);
Route::post('/subscribe', [SubscriberController::class, 'subscribe']);

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
Route::put('profile/settings/accounts', [AccountsController::class, 'updateAccount']);
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
Route::view('about/statutes-and-by-laws', 'about.statutes-and-by-laws.index');
Route::view('about/statutes-and-by-laws/general-provisions', 'about.statutes-and-by-laws.general-provisions');
Route::view('about/statutes-and-by-laws/aim-and-objectives-of-the-organization', 'about.statutes-and-by-laws.aim-and-objectives-of-the-organization');
Route::view('about/statutes-and-by-laws/governance-structure', 'about.statutes-and-by-laws.governance-structure');
Route::view('about/statutes-and-by-laws/use-of-property', 'about.statutes-and-by-laws.use-of-property');
Route::view('about/statutes-and-by-laws/staff-recruitment-wages-and-leave', 'about.statutes-and-by-laws.staff-recruitment-wages-and-leave');
Route::view('about/statutes-and-by-laws/reporting-and-financial-operations', 'about.statutes-and-by-laws.reporting-and-financial-operations');
Route::view('about/statutes-and-by-laws/duties-and-responsibilities-of-members', 'about.statutes-and-by-laws.duties-and-responsibilities-of-members');
Route::view('about/statutes-and-by-laws/miscellaneous-decrees', 'about.statutes-and-by-laws.miscellaneous-decrees');
Route::view('donate', 'donate.index');

/**
 * Redirect Routes
 */
Route::redirect('about', 'about/chairman-message');
