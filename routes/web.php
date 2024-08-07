<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\EventsController;
use App\Http\Controllers\FrontEnd\GalleryController;
use App\Http\Controllers\FrontEnd\MembershipController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('aboutUs');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-detail', [BlogController::class, 'blogDetail'])->name('blog-detail');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/event-detail', [EventsController::class, 'eventDetail'])->name('event-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');