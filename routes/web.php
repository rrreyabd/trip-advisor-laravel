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

// Topbar index
Route::get('/ulas', [UserController::class, 'ulas'])->name('ulas');
Route::get('/trip', [UserController::class, 'trip'])->name('trip');
Route::get('/masuk', [UserController::class, 'masuk'])->name('masuk');

// Layout
// Route::get('/navbar', [UserController::class, 'navbar'])->name('navbar');

// Ulasan
Route::get('/tulis-ulasan', [UserController::class, 'tulis_ulasan'])->name('tulis_ulasan');
