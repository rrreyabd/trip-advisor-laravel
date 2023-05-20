<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function show_photo($id) {
        $photos = Photo::with(['user', 'destination'])
        ->where("user_id", "=", $id)
        ->orderBy('id', 'asc')
        ->get();
        return view('profile.profile', [
            'photos' => $photos
        ]);
    }
}
