<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Comment_photo;
use App\Models\Destination;

class UlasanController extends Controller
{
    // Ulasan
    public function tulis_ulasan($id)
    {
        $destination = Destination::find($id);
        return view('ulas.tulis_ulasan', [
            'destination' => $destination
        ]);
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
        return view('layout.ulasan', compact('comments', 'id'));
    }

    public function images() {
        return view('all-images');
    }

    public function delete_ulasan($id) {
        $ulasan  = Comment::find($id)->delete();    
        return redirect()->back()->with('success', 'Ulasan berhasil dihapus');
    }

    public function create_ulasan(Request $request)
    {

        // $validated = $request->validate([
        //     'user_id'               => 'required',
        //     'destination_id'        => 'required',
        //     'rating_id'             => 'required',
        //     'title'                 => 'required|max:255',
        //     'content'               => 'required',
        //     'date'                  => 'required',
        //     'visit_type'            => 'required',
        //     'photo'                 => 'image|mimes:jpg,jpeg,png|max:10240'
        // ]);

        $new_comment = new Comment;
        $new_comment->user_id           = $request->user_id;
        $new_comment->destination_id    = $request->destination_id;
        $new_comment->destination_type  = $request->destination_type;
        $new_comment->rating_id         = $request->rating_id;
        $new_comment->title             = $request->title;
        $new_comment->content           = $request->content;
        $new_comment->date              = $request->date;
        $new_comment->visit_type        = $request->visit_type;

        $new_comment->save();
        
        $new_comment_photo = new Comment_photo;
        $new_comment_photo->destination_id = $request->destination_id;
        $new_comment_photo->comment_id = $new_comment->id;

        if ($request->hasFile('photo')) {
            // Define image location in local path
            $location = public_path('/img/ulasan');

            // Ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // Simpan nama file di database
            $new_comment_photo->photo = $request->file('photo')->getClientOriginalName();
        }

        $new_comment_photo->save();

        return redirect()->route('index')->with('success', 'Ulasan berhasil ditambahkan');
    }
}
