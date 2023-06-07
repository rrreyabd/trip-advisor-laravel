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
        // SELECT * FROM users WHERE id = $userId;

        $name = $user->firstName . ' ' . $user->lastName;
        return view('profile', compact('nama'));
    }

    public function search_result(Request $request)
    {
        $query = $request->input('query');
        $datas = Destination::where('destination_name', 'like', '%'.$query.'%')
                    ->orWhere('city', 'like', '%'.$query.'%')
                    ->orWhere('country', 'like', '%'.$query.'%')
                    ->orWhere('address', 'like', '%'.$query.'%')
                    ->get();  
        /*
        SELECT * FROM destinations 
        WHERE destination_name LIKE '%$query%' 
        OR city LIKE '%$query%' 
        OR country LIKE '%$query%' 
        OR address LIKE '%$query%';
        */
        
        $comments = Comment::with(['destination', 'rating','user', 'comment_photo'])
        ->orderBy('id', 'asc')
        ->get();

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