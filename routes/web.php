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
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');