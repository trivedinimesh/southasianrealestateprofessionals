<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\EventsController;
use App\Http\Controllers\FrontEnd\GalleryController;
use App\Http\Controllers\FrontEnd\MembershipController;
use App\Http\Controllers\FrontEnd\UserController;
use App\Http\Controllers\FrontEnd\AuthController;
use App\Http\Controllers\FrontEnd\BODController;
use App\Http\Controllers\FrontEnd\SponsorController;
use App\Http\Controllers\FrontEnd\SubscriptionController;

use App\Http\Controllers\FrontEnd\ForgotPasswordController;
use App\Http\Controllers\FrontEnd\ResetPasswordController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('aboutUs');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');

// Route::get('/', [AuthController::class, 'index'])->name('signin');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('action-login', [AuthController::class, 'actionlogin'])->name('login.action');
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('action-signup', [AuthController::class, 'actionSignup'])->name('signup.action');

Route::get('/forgot_password', [ForgotPasswordController::class, 'Index'])->name('forgot.password');
Route::post('/forgot_password_post', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('/reset_password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('/reset_password_post', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/event-detail/{event}', [EventsController::class, 'eventDetail'])->name('event-detail');
Route::get('/booking-confirmation', [EventsController::class, 'bookingConfirmation'])->name('booking-confirmation');


Route::get('/blogs/{request?}', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-detail/{blog}', [BlogController::class, 'blogDetail'])->name('blog-detail');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/password/change', [AuthController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/password/change', [AuthController::class, 'changePassword'])->name('password.update');
    
    Route::resource('/admin/users', UserController::class);
    Route::get('/admin/member', [UserController::class, 'member'])->name('member');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/edit-update', [UserController::class, 'editProfile'])->name('edit-profile');
    Route::put('/profile-update', [UserController::class, 'updateProfile'])->name('profile-update');
    Route::get('/membership-upselling', [UserController::class, 'membershipUpselling'])->name('membership-upselling');
    Route::get('/event-reminder', [UserController::class, 'eventReminder'])->name('event-reminder');
    
    Route::resource('/admin/board-of-director', BODController::class);

    Route::resource('/admin/sponsor', SponsorController::class);

    Route::get('/admin/blogs-list', [BlogController::class, 'list'])->name('blogs.list');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/admin/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::patch('/admin/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    
    

    Route::get('/admin/events-list', [EventsController::class, 'list'])->name('events.list');
    Route::get('/admin/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('/admin/events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/admin/events/{event}', [EventsController::class, 'show'])->name('events.show');
    Route::get('/admin/events/{event}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::patch('/admin/events/{event}', [EventsController::class, 'update'])->name('events.update');
    Route::delete('/admin/events/{event}', [EventsController::class, 'destroy'])->name('events.destroy');
    Route::get('/admin/events/{id}/book', [EventsController::class, 'bookEvent'])->name('events.book');
    Route::get('/admin/events/attandee/{event}', [EventsController::class, 'attendeeList'])->name('events.attendee-list');
    Route::get('/admin/events/attandee/verify/{bookingId}/{user}', [EventsController::class, 'verifyBooking'])->name('events.verifyBooking');
    Route::get('/past-events', [EventsController::class, 'pastEvents'])->name('events.past-events');
    Route::get('/view-bookings', [EventsController::class, 'viewBooking'])->name('events.view-booking');

    Route::get('/plans', [SubscriptionController::class, 'showPlans'])->name('plans');
    Route::post('/subscribe/{plan}', [SubscriptionController::class, 'subscribe'])->name('subscribe');
    Route::get('/membership/details', [SubscriptionController::class, 'subscriptionDetails'])->name('subscription.details');
    Route::get('/admin/membership/list', [SubscriptionController::class, 'listMembership'])->name('subscription.list');
    Route::post('/subscription/{id}/cancel', [SubscriptionController::class, 'cancelSubscription'])->name('subscription.cancel');
    Route::post('/subscription/{id}/renew', [SubscriptionController::class, 'renewSubscription'])->name('subscription.renew');
    Route::post('/subscription/{id}/extend', [SubscriptionController::class, 'extendSubscription'])->name('subscription.extend');

    Route::get('/admin/gallery-list', [GalleryController::class, 'list'])->name('gallery.list');
    Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    // Route::get('/admin/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    // Route::put('/admin/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});