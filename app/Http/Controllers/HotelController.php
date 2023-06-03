<?php

namespace App\Http\Controllers;

use Hamcrest\FeatureMatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Comment;
use App\Models\Destination_feature;
use App\Models\Price;
use App\Models\Feature;

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

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);
        
        $categories = ['hotel', 'semua kategori'];
        $features = Feature::whereIn('category', $categories)->get();

        return view('hotel.hotel', compact('hotels', 'comments', 'avgRating', 'roundedRating', 'features'));
        
    }
    public function hotel_detail($id) {
        $hotel = Destination::find($id);
        // dd($wisata);

        // ulasan wisata
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'desc')
        ->get();
        // dd($comments->first()->comment_photo);

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $destinationCount = Destination::select('city', DB::raw('count(*) as count'))
        ->where('destination_type', 'hotel')
        ->where('id', $id) // Tambahkan kondisi where id = $id di sini
        ->groupBy('city')
        ->get();
    
            
        $destination_features = Destination_feature::where('destination_id', $id)->get(); 
        $features = Feature::whereIn('id', $destination_features->pluck('feature_id'))->get();
        
        // $features = Destination_feature::with(['destination', 'feature'])
        // ->where('destination_id', '=', $id)
        // ->orderBy('id', 'asc')
        // ->get();
        // dd($features->feature->feature_detail);

        $prices = Price::with(['destination', 'partner'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($prices);
        
        return view('hotel.hotel_detail', compact('avgRating', 'roundedRating', 'hotel', 'comments', 'features', 'prices', 'destinationCount'));
    }

    public function filter(Request $request)
    {
        $featureIds = $request->input('feature_id', []);
        $filteredData = Destination_feature::whereIn('feature_id', $featureIds)
            ->get()
            ->unique('destination_id');
    
        $comments = Comment::with(['destination', 'rating', 'user', 'comment_photo'])
            ->where('destination_type', '=', 'hotel')
            ->orderBy('id', 'asc')
            ->get();
    
        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);
    
        return view('hotel-filter', compact('filteredData', 'avgRating', 'comments', 'roundedRating'));
    }
    
    
}