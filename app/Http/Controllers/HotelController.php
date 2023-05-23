<?php

namespace App\Http\Controllers;

use Hamcrest\FeatureMatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Comment;
use App\Models\Hotel_feature;
use App\Models\Price;

class HotelController extends Controller
{
    // Hotel
    public function hotel() {
        
        $hotels=Destination::with(['rating'])
        ->where('destination_type',"=" ,'hotel')
        ->orderBy('id','asc')
        ->get();
        
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'hotel')
        ->orderBy('id', 'asc')
        ->get();
        return view('hotel.hotel', compact('hotels', 'comments'));
        
    }
    public function hotel_detail($id) {
        $hotel = Destination::find($id);
        // dd($wisata);

        // ulasan wisata
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments->first()->comment_photo);
        
        
        $features = Hotel_feature::with(['destination', 'feature'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($features->feature->feature_detail);

        $prices = Price::with(['destination', 'partner'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($prices);
        
        return view('hotel.hotel_detail', compact('hotel', 'comments', 'features', 'prices'));
    }
}