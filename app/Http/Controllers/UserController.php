<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Index
    public function index()
    {
        return view('index');
    }

    // Profile
    public function profile()
    {
        return view('profile.profile');
    }

    // Hotel
    public function hotel() {
        return view('hotel.hotel');
    }
    public function hotel_detail() {
        return view('hotel.hotel_detail');
    }

    // Forum
    public function forum()
    {
        return view('forum.forum');
    }
    public function forum_search()
    {
        return view('forum.forum_search');
    }
    public function forum_detail()
    {
        return view('forum.forum_detail');
    }

    // Restoran
    public function restoran()
    {
        return view('restoran.restoran');
    }
    public function restoran_detail()
    {
        return view('restoran.restoran_detail');
    }

    // Destinasi
    public function destinasi()
    {
        return view('destinasi.destinasi');
    }

    public function destinasi_detail()
    {
        return view('destinasi.destinasi_detail');
    }

    // Topbar
    public function ulas()
    {
        return view('ulas.ulas');
    }

    // Ulasan
    public function ulasan()
    {
        return view('layout.ulasan');
    }
    public function tulis_ulasan()
    {
        return view('ulas.tulis_ulasan');
    }

    // Trip
    public function trip()
    {
        return view('trip.trip');
    }
    public function detail_trip()
    {
        return view('trip.detail_trip');
    }

    // Navbar
    // public function navbar()
    // {
    //     return view('layout.navbar');
    // }
}