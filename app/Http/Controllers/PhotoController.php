<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\User;
use App\Models\Comment;

class PhotoController extends Controller
{
    public function show_photo($id) {
        $user = User::find($id);
        $contribution = Comment::where("user_id", "=", "$id" )->count();
        
        $photos = Photo::with(['user', 'destination'])
        ->where("user_id", "=", $id)
        ->orderBy('id', 'asc')
        ->get();
        return view('profile.profile', [
            'photos' => $photos,
            'user' => $user,
            'contribution' => $contribution
        ]);
    }
    
    public function delete_photo($id) {
        $photo  = Photo::find($id)->delete();    
        return redirect()->back()->with('success', 'Foto berhasil dihapus');
}
}
