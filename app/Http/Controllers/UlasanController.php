<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Ulasan
    public function ulasan()
    {
        return view('layout.ulasan');
    }
    public function tulis_ulasan()
    {
        return view('ulas.tulis_ulasan');
    }
}
