<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Comment_photo;

class UlasanController extends Controller
{
    // Ulasan
    public function tulis_ulasan()
    {
        return view('ulas.tulis_ulasan');
    }

    public function show_ulasan($id) { // Menampilkan ulasan milik user
        $ulasans = Comment::with(['destination', 'comment_photo'])
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

    public function images() {
        return view('all-images');
    }

    public function delete_ulasan($id) {
            $ulasan  = Comment::find($id)->delete();    
            return redirect()->back()->with('success', 'Ulasan berhasil dihapus');
    }
}
