<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Comment;
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
        
        $categories = ['restoran', 'semua kategori'];
        $features = Feature::whereIn('category', $categories)->get();


        return view('restoran.restoran', compact('restaurants', 'comments', 'features'));
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

        $comment_photos = Comment_photo::where('destination_id', $id)->get();
        
        $destination_features = Destination_feature::where('destination_id', $id)->get(); 
        $features = Feature::whereIn('id', $destination_features->pluck('feature_id'))->get();

        // $type = Restaurant_type::with(['destination'])
        // ->where('destination_id','=', $id)
        // ->get();
        // dd($type);
        
        return view('restoran.restoran_detail', compact('restaurant', 'comments', 'features', 'comment_photos'));
    }

    public function filter(Request $request)
    {
        $featureIds = $request->input('feature_id', []);

        $filteredData = Destination_feature::whereIn('feature_id', $featureIds)->get();
        return view('filter-result', compact('filteredData'));
    }
    
    
    
    
    

}