<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip_plan;
use App\Models\Trip_detail;
use App\Models\Trip_destination_detail;
use App\Models\Favorite;


class TripController extends Controller
{
    // Trip

    // public function detail_trip()
    // {
    //     return view('trip.detail_trip');
    // }

    // public function show_trip_plans($id)
    // {
    //     $trips = Trip_plan::where('user_id', auth()->id())->get();
    //     // $count = TripPlans::where('user_id', auth()->id())->count();
    //     return view('trip.trip', [
    //         'trips' => $trips
    //     ]);
    // }
    
    public function trip($id)//ada parameter $id untuk tes tambahkan url manual /3 user 'angga'
    {
        $plans = Trip_plan::with(['user'])
        ->where('user_id', $id) //harus dari klik ulas dengan url menerima id
        ->orderBy('id', 'asc')
        ->get();
        // dd($plans);
        return view('trip.trip', compact('plans'));
    }
    public function detail_trip($id)//tambahkan url manual /1 untuk melihat 3 hari
    {
        $plan = Trip_plan::find($id);
        
        $days = Trip_detail::with(['trip_plan', 'trip_destination_detail'])
        ->where('trip_plan_id', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($days) ;
           
        $details = Trip_destination_detail::with(['destination'])
        ->where('trip_plan_id', $id)
        ->orderBy('id', 'asc')
        ->get();
        // dd($details);
        return view('trip.detail_trip', compact('plan', 'days', 'details'));
    }

    public function favorite($id){ //memperlihatkan favorit
        $favorites = Favorite::with(['user', 'destination'])
        ->where('user_id', $id)
        ->orderBy('id', 'asc')
        ->get();
        //dd($
        return view('trip.favorit', compact('favorites'));
    }
    public function toggleFavorite(Request $request) //menambahkan destinasi ke favorit
    {
        $destinationId = $request->input('destination_id');
        // $userId = Auth::id();
        $userId = 3; //ini ak deklarasiin sendiri sbg contoh, klo udah pke Auth apus aja

        $favorite = Favorite::with(['user', 'destination'])
        ->where('user_id', $userId)
        ->where('destination_id', $destinationId)
        ->first();
        
        if ($favorite) {
            // Favorit sudah ada, hapus dari daftar favorit
            $favorite->delete();
            if($favorite->destination->destination_type == "restoran")
                return back()->with('delete_favorite', "Berhasil dihapus dari favorit!");
            else if($favorite->destination->destination_type == "hotel")
                return back()->with('delete_favorite', "Berhasil dihapus dari favorit!");
            else if($favorite->destination->destination_type == "wisata")
                return back()->with('delete_favorite', "Berhasil dihapus dari favorit!");
                
        } else {
            // Favorit belum ada, tambahkan ke daftar favorit
            $favorite = new Favorite();
            $favorite->user_id = $userId;
            $favorite->destination_id = $destinationId;
            $favorite->save();

            if($favorite->destination->destination_type == "restoran")
                return back()->with('update_favorite', "Berhasil menambahkan ke favorit!");
            else if($favorite->destination->destination_type == "hotel")
                return back()->with('update_favorite', "Berhasil menambahkan ke favorit!");
            else if($favorite->destination->destination_type == "wisata")
                return back()->with('update_favorite', "Berhasil menambahkan ke favorit!");
        }
        // Lakukan operasi untuk menambahkan atau menghapus dari daftar favorit dalam database sesuai kebutuhan
        // ...
    }
}
