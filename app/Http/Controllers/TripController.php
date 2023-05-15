<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    // Trip
    public function trip()
    {
        return view('trip.trip');
    }
    public function detail_trip()
    {
        return view('trip.detail_trip');
    }
}
