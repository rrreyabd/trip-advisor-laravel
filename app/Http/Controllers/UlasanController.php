<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
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
        ->orderBy('id', 'desc')
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

        $lima = $comments->where('rating_id', 5)->count();
        $empat = $comments->where('rating_id', 4)->count();
        $tiga = $comments->where('rating_id', 3)->count();
        $dua = $comments->where('rating_id', 2)->count();
        $satu = $comments->where('rating_id', 1)->count();

        // dd($empat);
        return view('layout.ulasan', compact('comments', 'id', 'lima', 'empat', 'tiga', 'dua', 'satu'));
    }

    public function images($id)
    {
        $photo = Destination::where('id', $id)->first();
        $comments = Comment::where('destination_id', $id)->get();
        // dd($comments);
        return view('all-images', [
            'id' => $id,
            'photo' => $photo,
            'comments' => $comments
        ]);
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

        // Mengunggah dan menyimpan foto-foto yang diunggah
        if ($request->hasFile('photo')) {
            $files = $request->file('photo');
            $maxFiles = 10; // Batasan maksimal file

            foreach ($files as $file) {
                if ($file->isValid()) {
                    // Mengatur lokasi penyimpanan foto
                    $location = public_path('/img/ulasan');
                    $filename = $file->getClientOriginalName();

                    // Pindahkan file ke lokasi penyimpanan
                    $file->move($location, $filename);

                    // Simpan nama file di dalam kolom terpisah di tabel comment_photos
                    $commentPhoto = new Comment_photo;
                    $commentPhoto->destination_id = $request->destination_id;
                    $commentPhoto->comment_id = $new_comment->id;
                    $commentPhoto->photo = $filename;
                    $commentPhoto->save();

                    $maxFiles--;
                    if ($maxFiles <= 0) {
                        break; // Keluar dari perulangan jika sudah mencapai batasan maksimal file
                    }
                }
            }
        }
        return redirect()->route('index')->with('success', 'Ulasan berhasil ditambahkan');
    }

    public function filter(Request $request, $id)
    {
        $ratingIds = $request->input('rating_id', []);
        $visitTypes = $request->input('visit_type', []);
        $months = $request->input('month', []);

        $query = Comment::where('destination_id', $id);

        if (!empty($ratingIds)) {
            $query->whereIn('rating_id', $ratingIds);
        }

        if (!empty($visitTypes)) {
            $query->whereIn('visit_type', $visitTypes);
        }

        if (!empty($months)) {
            $query->where(function ($q) use ($months) {
                foreach ($months as $month) {
                    $q->orWhereMonth('created_at', Carbon::parse($month)->month);
                }
            });
        }

        $comments = $query->get();

        // Menghitung jumlah komentar dengan rating tertentu
        $lima = $comments->where('rating_id', 5)->count();
        $empat = $comments->where('rating_id', 4)->count();
        $tiga = $comments->where('rating_id', 3)->count();
        $dua = $comments->where('rating_id', 2)->count();
        $satu = $comments->where('rating_id', 1)->count();

        return view('layout.ulasan', compact('comments', 'id', 'lima', 'empat', 'tiga', 'dua', 'satu'));
    }

    public function avgUlasan($id)
    {
        $comments = Comment::with(['destination', 'rating'])
            ->where('destination_id', $id)
            ->get();

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        return view('avgUlasan', compact('avgRating', 'roundedRating'));
    }

}
