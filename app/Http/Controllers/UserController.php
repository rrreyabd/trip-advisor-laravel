<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // index
    public function index()
    {
        return view('index');
    }

    // hotel
    public function hotel() {
        return view('hotel.hotel');
    }

    // forum
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

    // restoran
    public function restoran()
    {
        return view('restoran.restoran');
    }
    public function restoran_detail()
    {
        return view('restoran.restoran_detail');
    }

    // destinasi
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

    // Navbar
    // public function navbar()
    // {
    //     return view('layout.navbar');
    // }
}