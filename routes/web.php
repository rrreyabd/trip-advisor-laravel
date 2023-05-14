<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Index
Route::get('/', [UserController::class, 'index'])->name('index');

// Hotel
Route::get('/hotel', [UserController::class, 'hotel'])->name('hotel');
Route::get('/hotel-detail', [UserController::class, 'hotel_detail'])->name('hotel_detail');

// Restoran
Route::get('/restoran', [UserController::class, 'restoran'])->name('restoran');
Route::get('/restoran-detail', [UserController::class, 'restoran_detail']);

// Destinasi
Route::get('/destinasi', [UserController::class, 'destinasi'])->name('destinasi');
Route::get('/destinasi_detail', [UserController::class, 'destinasi_detail'])->name('destinasi_detail');

// Forum
Route::get('/forum', [UserController::class, 'forum'])->name('forum');
Route::get('/forum-search', [UserController::class, 'forum_search'])->name('forum_search');
Route::get('/forum-detail', [UserController::class, 'forum_detail'])->name('forum_detail');

// Ulas
Route::get('/ulas', [UserController::class, 'ulas'])->name('ulas');

// Trip
Route::get('/trip', [UserController::class, 'trip'])->name('trip');
Route::get('/detail-trip', [UserController::class, 'detail_trip'])->name('detail_trip');

// Masuk
Route::get('/masuk', [UserController::class, 'masuk'])->name('masuk');

// Layout
// Route::get('/navbar', [UserController::class, 'navbar'])->name('navbar');

// Ulasan
Route::get('/ulasan', [UserController::class, 'ulasan'])->name('ulasan');
Route::get('/tulis-ulasan', [UserController::class, 'tulis_ulasan'])->name('tulis_ulasan');

// Profile
Route::get('/profile', [UserController::class, 'profile'])->name('profile');