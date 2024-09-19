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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('aboutUs');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-detail', [BlogController::class, 'blogDetail'])->name('blog-detail');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/event-detail', [EventsController::class, 'eventDetail'])->name('event-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');

// Route::get('/', [AuthController::class, 'index'])->name('signin');
Route::get('signin', [AuthController::class, 'index'])->name('signin');
Route::post('action-signin', [AuthController::class, 'actionSignin'])->name('signin.action');
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('action-signup', [AuthController::class, 'actionSignup'])->name('signup.action');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);