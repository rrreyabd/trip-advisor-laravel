<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Comment;
use App\Models\Comment_photo;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    // Destinasi
    public function destinasi()
    {
        return view('destinasi.destinasi');
    }

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
        
        return view('destinasi.destinasi_detail', compact('wisata', 'comments'));
    }

    public function wisata(){
        $attractions = Destination::with(['rating'])
        // ->select('id','destination_name', 'address','website', 'contact', 'category', 'rating_id', 'city', 'country', 'photo')
        ->where('destination_type', '=', 'restoran')
        ->orderBy('id', 'asc')
        ->get();
        // dd($attractions);

        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->where('destination_type', '=', 'restoran')
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments);

        return view('destinasi.destinasi', compact('attractions', 'comments' ));
    }


}