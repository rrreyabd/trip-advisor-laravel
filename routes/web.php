<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ProfileController;

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
Route::get('/hotel', [HotelController::class, 'hotel'])->name('hotel');
Route::get('/hotel-detail', [HotelController::class, 'hotel_detail'])->name('hotel_detail');

// Restoran
Route::get('/restoran', [RestoranController::class, 'restoran'])->name('restoran');
Route::get('/restoran-detail', [RestoranController::class, 'restoran_detail']);

// Destinasi
Route::get('/destinasi', [WisataController::class, 'destinasi'])->name('destinasi');
Route::get('/destinasi_detail', [WisataController::class, 'destinasi_detail'])->name('destinasi_detail');

// Forum
Route::get('/forum', [ForumController::class, 'forum'])->name('forum');
Route::get('/forum-search', [ForumController::class, 'forum_search'])->name('forum_search');
Route::get('/forum-detail', [ForumController::class, 'forum_detail'])->name('forum_detail');

// Trip
Route::get('/trip', [TripController::class, 'trip'])->name('trip');
Route::get('/detail-trip', [TripController::class, 'detail_trip'])->name('detail_trip');

// Layout
// Route::get('/navbar', [UserController::class, 'navbar'])->name('navbar');

// Ulasan
Route::get('/ulasan', [UlasanController::class, 'ulasan'])->name('ulasan');
Route::get('/tulis-ulasan', [UlasanController::class, 'tulis_ulasan'])->name('tulis_ulasan');

// Profile
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/ulas', [ProfileController::class, 'ulas'])->name('ulas');

//////////////// ADMIN //////////////////
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');