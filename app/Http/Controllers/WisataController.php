<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Comment;
use App\Models\Feature;
use App\Models\Destination_feature;
use App\Models\Comment_photo;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    // Destinasi
    public function destinasi_detail($id)
    {
        // wisata
        $wisata = Destination::find($id);
        // dd($wisata);

        // ulasan wisata
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments->first()->comment_photo);
        
        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $destinationCount = Destination::select('city', DB::raw('count(*) as count'))
        ->where('destination_type', 'wisata')
        ->where('id', $id)
        ->groupBy('city')
        ->get();

        $comment_photos = Comment_photo::where('destination_id', $id)->get();
        
        $destination_features = Destination_feature::where('destination_id', $id)->get(); 
        $features = Feature::whereIn('id', $destination_features->pluck('feature_id'))->get();
        
        return view('destinasi.destinasi_detail', compact('wisata', 'comments', 'avgRating', 'features', 'comment_photos', 'destinationCount', 'roundedRating'));
    }

    public function wisata(){
        $attractions = Destination::with(['rating'])
        // ->select('id','destination_name', 'address','website', 'contact', 'category', 'rating_id', 'city', 'country', 'photo')
        ->where('destination_type', '=', 'wisata')
        ->orderBy('id', 'asc')
        ->get();
        // dd($attractions);

        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'wisata')
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments);

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $categories = ['wisata', 'semua kategori'];
        $features = Feature::whereIn('category', $categories)->get();

        return view('destinasi.destinasi', compact('attractions', 'comments', 'avgRating', 'roundedRating', 'features' ));
    }

    public function filter(Request $request)
    {
        $featureIds = $request->input('feature_id', []);
        $filteredData = Destination_feature::whereIn('feature_id', $featureIds)
            ->get()
            ->unique('destination_id');

        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'wisata')
        ->orderBy('id', 'asc')
        ->get();

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);
        return view('wisata-filter', compact('filteredData', 'avgRating', 'comments', 'roundedRating'));
    }

}