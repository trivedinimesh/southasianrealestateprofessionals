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

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/event-detail', [EventsController::class, 'eventDetail'])->name('event-detail');


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs-detail', [BlogController::class, 'blogDetail'])->name('blog-detail');

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('/admin/users', UserController::class);

    Route::resource('/admin/board-of-director', BODController::class);

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
});