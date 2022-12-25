<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardGalleryController;

// halaman home
Route::get('/', [HomeController::class, 'index']);

// halaman galleries
Route::get('/galleries', [GalleryController::class, 'index']);

// halaman gallery
Route::get('/galleries/{gallery:slug}', [GalleryController::class, 'show']);

// halaman categories
Route::get('/categories', [CategoryController::class, 'showCategories']);

// halaman category
Route::get('/categories/{category:slug}', [CategoryController::class, 'showCategory']);

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register
// Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
// Route::post('/register', [RegisterController::class, 'store']);

// halaman dashboard
Route::resource('/dashboard/galleries', DashboardGalleryController::class)->middleware('auth');
