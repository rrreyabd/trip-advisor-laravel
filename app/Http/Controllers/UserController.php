<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Destination;
use App\Models\Comment;

class UserController extends Controller
{
    // Index
    public function index()
    {
        return view('index');
    }

    
    public function showProfile($userId)
    {
        $user = User::find($userId);
        $name = $user->firstName . ' ' . $user->lastName;
        return view('profile', compact('nama'));
    }

    // Navbar
    // public function navbar()
    // {
    //     return view('layout.navbar');
    // }
     
    public function search_result(Request $request)
    {
        $query = $request->input('query');
        
        // Proses pencarian data berdasarkan search term
        // Misalnya, menggunakan model atau logika lainnya untuk mendapatkan data yang relevan
        
        // Contoh penggunaan model User untuk mencari data
        $datas = Destination::where('destination_name', 'like', '%'.$query.'%')
                    ->orWhere('city', 'like', '%'.$query.'%')
                    ->orWhere('country', 'like', '%'.$query.'%')
                    ->orWhere('address', 'like', '%'.$query.'%')
                    ->get();
        
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->orderBy('id', 'asc')
        ->get();


        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        $avgRating = $comments->avg('rating.value');
        $roundedRating = floor($avgRating);

        return view('search-result', [
            'datas' => $datas,
            'query' => $query,
            'comments' => $comments,
            'roundedRating' => $roundedRating,
            'avgRating' => $avgRating
        ]);
                    
    }
    
}