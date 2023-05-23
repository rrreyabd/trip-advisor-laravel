<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip_plan;


class TripController extends Controller
{
    // Trip

    public function detail_trip()
    {
        return view('trip.detail_trip');
    }

    public function show_trip_plans($id)
    {
        $trips = Trip_plan::where('user_id', auth()->id())->get();
        // $count = TripPlans::where('user_id', auth()->id())->count();
        return view('trip.trip', [
            'trips' => $trips
        ]);
    }
}
