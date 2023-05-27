<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Index
// Route::get('/', [UserController::class, 'index'])->name('index');

// Hotel
Route::get('/hotel', [HotelController::class, 'hotel'])->name('hotel');
Route::get('/hotel-detail/{id}', [HotelController::class, 'hotel_detail'])->name('hotel_detail');

// Restoran
Route::get('/restoran', [RestoranController::class, 'restoran'])->name('restoran');
Route::get('/restoran-detail/{id}', [RestoranController::class, 'restoran_detail'])->name('restoran_detail');

// Destinasi
Route::get('/destinasi', [WisataController::class, 'wisata'])->name('destinasi');
Route::get('/destinasi_detail/{id}', [WisataController::class, 'destinasi_detail'])->name('destinasi_detail');

// Forum
Route::get('/forum', [ForumController::class, 'forum'])->name('forum');
Route::get('/forum-search', [ForumController::class, 'show_forum'])->name('forum_search');
Route::get('/forum-detail/{id}', [ForumController::class, 'forum_detail'])->name('forum_detail');

// Trip
Route::get('/trip/{id}', [TripController::class, 'show_trip_plans'])->middleware(['auth', 'verified'])->name('trip');
// Route::get('/trip/{id}', [TripController::class, 'trip'])->name('trip');
Route::get('/detail-trip', [TripController::class, 'detail_trip'])->name('detail_trip');

// Layout
// Route::get('/navbar', [UserController::class, 'navbar'])->name('navbar');

// Ulasan
Route::get('/ulasan/{id}', [UlasanController::class, 'ulasan'])->name('ulasan');
Route::get('/tulis-ulasan', [UlasanController::class, 'tulis_ulasan'])->name('tulis_ulasan');

// Profile
Route::get('/profile-detail/{id}', [PhotoController::class, 'show_photo'])->name('profile_detail');
Route::get('/ulas/{id}', [UlasanController::class, 'show_ulasan'])->name('ulas');

//////////////// ADMIN //////////////////
Route::get('/admin', [AdminController::class, 'count_all'])->name('admin');
Route::get('/admin/manage-user', [AdminController::class, 'show_all_users'])->name('manage-user');
Route::get('/admin/manage-destination', [AdminController::class, 'show_all_destinations'])->name('manage-destination');
Route::get('/admin/manage-destination/{id}/detail', [AdminController::class, 'show_detail_destination'])->name('manage-destination-detail');
Route::get('/admin/manage-forum', [AdminController::class, 'show_all_forums'])->name('manage-forum');
Route::get('/admin/manage-forum/{id}/reply', [AdminController::class, 'show_all_replies'])->name('manage-forum-reply');
Route::get('/admin/manage-partner', [AdminController::class, 'show_all_partners'])->name('manage-partner');
Route::get('/admin/edit-partner/{id}', [AdminController::class, 'update_partner'])->name('edit-partner');

// Delete
Route::delete('/admin/manage-postingan/{id}/delete', [AdminController::class, 'delete_destination'])->name('destination-delete');
Route::delete('/admin/manage-user/{id}/delete', [AdminController::class, 'delete_user'])->name('user-delete');
Route::delete('/admin/manage-forum/{id}/delete', [AdminController::class, 'delete_forum'])->name('forum-delete');
Route::delete('/admin/manage-reply/{id}/delete', [AdminController::class, 'delete_reply'])->name('reply-delete');
Route::delete('/admin/manage-partner/{id}/delete', [AdminController::class, 'delete_partner'])->name('partner-delete');
Route::delete('/admin/feature/{id}/delete', [AdminController::class, 'delete_feature'])->name('feature-delete');

// Update
Route::put('/admin/destination/{id}/edit', [AdminController::class, 'edit_destination'])->name('destination-edit');
Route::put('/admin/partner/{id}/edit', [AdminController::class, 'edit_partner'])->name('partner-edit');

// Create
Route::post('/admin/destination/add', [AdminController::class, 'add_destination'])->name('destination-add');
Route::post('/admin/partner/add', [AdminController::class, 'add_partner'])->name('partner-add');