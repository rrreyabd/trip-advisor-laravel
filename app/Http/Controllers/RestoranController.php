<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoranController extends Controller
{
    // Restoran
    public function restoran()
    {
        return view('restoran.restoran');
    }
    public function restoran_detail()
    {
        return view('restoran.restoran_detail');
    }
}
