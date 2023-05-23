<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class UlasanController extends Controller
{
    // Ulasan
    public function tulis_ulasan()
    {
        return view('ulas.tulis_ulasan');
    }

    public function show_ulasan($id) { // Menampilkan ulasan milik user
        $ulasans = Comment::with(['destination'])
        ->where("user_id", "=", $id)
        ->orderBy('id', 'asc')
        ->get();
        return view('profile.ulas', [
            'ulasans' => $ulasans
        ]);
    }
    
    public function ulasan($id){ // Menampilkan ulasan destinasi
        $comments = Comment::with('destination')
        ->where('destination_id', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($comments);
        return view('layout.ulasan', compact('comments'));


    }
}
