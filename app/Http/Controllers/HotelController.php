<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    // Hotel
    public function hotel() {
        return view('hotel.hotel');
    }
    public function hotel_detail() {
        return view('hotel.hotel_detail');
    }
}
