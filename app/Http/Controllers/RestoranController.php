<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Models\Comment_photo;
use App\Models\Destination_feature;
use App\Models\Feature;

class RestoranController extends Controller
{
    // Restoran
    public function restoran()
    {
        $restaurants=Destination::with(['rating'])
        ->where('destination_type',"=" ,'restoran')
        ->orderBy('id','asc')
        ->get();
        
        $comments=Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'restoran')
        ->orderBy('id', 'asc')
        ->get();
        
        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $categories = ['restoran', 'semua kategori'];
        $features = Feature::whereIn('category', $categories)->get();


        return view('restoran.restoran', compact('restaurants', 'avgRating', 'roundedRating', 'comments', 'features'));
    }
    public function restoran_detail($id)
    {
        $restaurant = Destination::find($id);
        // dd($restaurant);

        // ulasan Restoran
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'desc')
        ->get();
        // dd($comments->first()->comment_photo);
        
        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $destinationCount = Destination::select('city', DB::raw('count(*) as count'))
        ->where('destination_type', 'restoran')
        ->where('id', $id)
        ->groupBy('city')
        ->get();

        $comment_photos = Comment_photo::where('destination_id', $id)->get();
        
        $destination_features = Destination_feature::where('destination_id', $id)->get(); 
        $features = Feature::whereIn('id', $destination_features->pluck('feature_id'))->get();

        // $type = Restaurant_type::with(['destination'])
        // ->where('destination_id','=', $id)
        // ->get();
        // dd($type);
        
        return view('restoran.restoran_detail', compact('restaurant', 'avgRating', 'roundedRating', 'comments', 'features', 'comment_photos', 'destinationCount'));
    }

    public function filter(Request $request)
    {
        $featureIds = $request->input('feature_id', []);
        $filteredData = Destination_feature::whereIn('feature_id', $featureIds)
            ->get()
            ->unique('destination_id');
        
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'restoran')
        ->orderBy('id', 'asc')
        ->get();

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);


        return view('resto-filter', compact('filteredData', 'avgRating', 'comments', 'roundedRating'));
    }

}