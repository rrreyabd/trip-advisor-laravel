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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

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
Route::post('/reply/add', [ForumController::class, 'add_reply'])->name('add_reply');
Route::get('/tanya-forum', [ForumController::class, 'tanya_forum'])->name('tanya_forum');

// Trip
Route::get('/trip/{id}/{type}', [TripController::class, 'trip'])->name('trip');
Route::get('/detail_trip/{id}', [TripController::class, 'detail_trip'])->name('detail_trip');
Route::get('/favorite/{id}', [TripController::class, 'favorite'])->name('favorite');
Route::post('/favorite/{destinationId}', [TripController::class, 'toggleFavorite'])->name('addFav');
Route::post('/trip_plan', [TripController::class, 'store_trip_plan'])->name('trip_plan');
Route::delete('/trip_plan/{id}', [TripController::class, 'destroy'])->name('delete_plan');
Route::post('/trip_detail', [TripController::class, 'store_trip_detail'])->name('simpan_detail');
Route::delete('/trip_detail/{id}', [TripController::class, 'destroy'])->name('delete_detail');
Route::get('/search', [TripController::class, 'search'])->name('search');

// Layout
// Route::get('/navbar', [UserController::class, 'navbar'])->name('navbar');

// Ulasan
Route::get('/ulasan/{id}', [UlasanController::class, 'ulasan'])->name('ulasan');
Route::get('/tulis-ulasan/{id}', [UlasanController::class, 'tulis_ulasan'])->name('tulis_ulasan');
Route::get('/images', [UlasanController::class, 'images'])->name('images');
Route::post('/create-ulasan', [UlasanController::class, 'create_ulasan'])->name('create-ulasan');

// Profile
Route::get('/profile-detail/{id}', [PhotoController::class, 'show_photo'])->name('profile_detail');
Route::get('/ulas/{id}', [UlasanController::class, 'show_ulasan'])->name('ulas');
Route::put('/profile/{id}/edit', [ProfileController::class, 'edit_bio'])->name('edit_bio');

//////////////// ADMIN //////////////////
Route::get('/admin', [AdminController::class, 'count_all'])->name('admin');
Route::get('/admin/manage-user', [AdminController::class, 'show_all_users'])->name('manage-user');
Route::get('/admin/manage-destination', [AdminController::class, 'show_all_destinations'])->name('manage-destination');
Route::get('/admin/manage-destination/{id}/detail', [AdminController::class, 'show_detail_destination'])->name('manage-destination-detail');
Route::get('/admin/manage-forum', [AdminController::class, 'show_all_forums'])->name('manage-forum');
Route::get('/admin/manage-forum/{id}/reply', [AdminController::class, 'show_all_replies'])->name('manage-forum-reply');
Route::get('/admin/manage-partner', [AdminController::class, 'show_all_partners'])->name('manage-partner');
Route::get('/admin/manage-ulasan', [AdminController::class, 'show_all_comments'])->name('manage-ulasan');
Route::get('/admin/edit-partner/{id}', [AdminController::class, 'update_partner'])->name('edit-partner');

// Delete
Route::delete('/admin/manage-postingan/{id}/delete', [AdminController::class, 'delete_destination'])->name('destination-delete');
Route::delete('/admin/manage-user/{id}/delete', [AdminController::class, 'delete_user'])->name('user-delete');
Route::delete('/admin/manage-forum/{id}/delete', [AdminController::class, 'delete_forum'])->name('forum-delete');
Route::delete('/admin/manage-reply/{id}/delete', [AdminController::class, 'delete_reply'])->name('reply-delete');
Route::delete('/admin/manage-partner/{id}/delete', [AdminController::class, 'delete_partner'])->name('partner-delete');
Route::delete('/admin/feature/{id}/delete', [AdminController::class, 'delete_feature'])->name('feature-delete');
Route::delete('/ulasan/{id}/delete', [AdminController::class, 'delete_ulasan'])->name('ulasan-delete');
Route::delete('/photo/{id}/delete', [PhotoController::class, 'delete_photo'])->name('photo-delete');
Route::delete('/forum/{id}/delete', [ForumController::class, 'delete_forum'])->name('user-forum-delete');


// Update
Route::put('/admin/destination/{id}/edit', [AdminController::class, 'edit_destination'])->name('destination-edit');
Route::put('/admin/partner/{id}/edit', [AdminController::class, 'edit_partner'])->name('partner-edit');

// Create
Route::post('/admin/destination/add', [AdminController::class, 'add_destination'])->name('destination-add');
Route::post('/admin/partner/add', [AdminController::class, 'add_partner'])->name('partner-add');
Route::post('/forum/add', [ForumController::class, 'add_forum'])->name('forum-add');
Route::post('/feature/add', [AdminController::class, 'add_feature'])->name('feature-add');

// Search
Route::get('/search/result', [UserController::class, 'search_result'])->name('search-result');
Route::get('/filter/resto', [RestoranController::class, 'filter'])->name('resto-filter');