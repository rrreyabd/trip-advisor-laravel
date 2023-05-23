<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Comment;
use App\Models\Restaurant_type;

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
        
        return view('restoran.restoran', compact('restaurants', 'comments'));
    }
    public function restoran_detail($id)
    {
        $restaurant = Destination::find($id);
        // dd($restaurant);

        // ulasan wisata
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments->first()->comment_photo);
        
        
        $type = Restaurant_type::with(['destination'])
        ->where('destination_id','=', $id)
        ->get();
        // dd($type);
        
        return view('restoran.restoran_detail', compact('restaurant', 'comments', 'type'));
    }
}