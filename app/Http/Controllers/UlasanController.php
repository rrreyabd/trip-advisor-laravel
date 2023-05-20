<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class UlasanController extends Controller
{
    // Ulasan
    public function ulasan()
    {
        return view('layout.ulasan');
    }
    public function tulis_ulasan()
    {
        return view('ulas.tulis_ulasan');
    }

    public function show_ulasan($id) {
        $ulasans = Comment::with(['destination'])
        ->where("user_id", "=", $id)
        ->orderBy('id', 'asc')
        ->get();
        return view('profile.ulas', [
            'ulasans' => $ulasans
        ]);
    }
    
}
