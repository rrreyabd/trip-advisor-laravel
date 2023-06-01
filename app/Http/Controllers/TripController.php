<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip_plan;
use App\Models\Trip_detail;
use App\Models\Trip_destination_detail;
use App\Models\Favorite;
use App\Models\Destination;
use Illuminate\Validation\Rule;

class TripController extends Controller
{
    // SHOW FUNCTION
    public function trip($id, $type)//ada parameter $id untuk tes tambahkan url manual /3 user 'angga'
    {
        if ($type == 'all'){
        $plans = Trip_plan::with(['user'])
        ->where('user_id', $id) //harus dari klik ulas dengan url menerima id
        ->orderBy('id', 'asc')
        ->get();
        }
        else if ($type == 'private'){
        $plans = Trip_plan::with(['user'])
        ->where('user_id', $id)
        ->where('trip_type', '=', 'pribadi') //harus dari klik ulas dengan url menerima id
        ->orderBy('id', 'asc')
        ->get();
        }
        else if ($type == 'public'){
        $plans = Trip_plan::with(['user'])
        ->where('user_id', $id)
        ->where('trip_type', '=', 'publik') //harus dari klik ulas dengan url menerima id
        ->orderBy('id', 'asc')
        ->get();
        }
        // dd($plans);
        return view('trip.trip', compact('plans'));
    }
    public function detail_trip($id)//tambahkan url manual /1 untuk melihat 3 hari
    {
        $plan = Trip_plan::find($id);
        
        $days = Trip_detail::with(['trip_plan', 'trip_destination_detail'])
        ->where('trip_plan_id', $id)->orderBy('id', 'asc')->get();
        // dd($days) ;
           
        $tdd = Trip_destination_detail::with(['destination'])
        ->where('trip_plan_id', $id)->orderBy('id', 'asc')->get();
        // dd($details);
        
        return view('trip.detail_trip', compact('plan', 'days', 'tdd'));
    }

    public function favorite($id){ //memperlihatkan favorit
        $favorites = Favorite::with(['user', 'destination'])
        ->where('user_id', $id)
        ->orderBy('id', 'asc')
        ->get();
        //dd($
        return view('trip.favorit', compact('favorites'));
    }

    //STORE FUNCTION
    public function store_trip_plan(Request $request)
    {
        $plan = $request->validate([
           'trip_name'  => 'required|max:20',
           'trip_info'  => 'required|max:60',
           'days'       =>'required|integer|min:1', 
           'trip_type'  => 'required',
           'user_id'    => 'required'
        ]);

        $trip_plan = new Trip_plan($plan);
        $trip_plan->user_id = $request->user_id;
        
        $trip_plan->save();

        //fungsi looping item sesuai hari yang diinput
        $days = $request->input('days');
        
        for($i = 1; $i <= $days; $i++){
            $tripDetail = new Trip_detail;
            $tripDetail->trip_plan_id = $trip_plan->id;
            $tripDetail->save();
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $destinations = Destination::where('destination_name', 'LIKE', '%' . $query . '%')
            ->select('destination_name', 'id')
            ->get()
            ->toArray();
        return response()->json($destinations);
    }
    
    
    public function store_trip_detail(Request $request){

        $detail = $request->validate([
            'destinationId' => 'required|integer|min:1',
            'day' => 'required|integer|min:1',
            'planId' => 'required|integer|min:1'
        ]);
        
        $destinationId = $request->input('destinationId');
        // dd($destinationId);
        $tripDetailId = $request->input('day');
        // dd($tripDetailId);
        $tripPlanId = $request->input('planId');
        // dd($tripPlanId);
        
        $store = new Trip_destination_detail();
        $store->trip_plan_id = $tripPlanId;
        $store->destination_id = $destinationId;
        $store->trip_detail_id = $tripDetailId;
        $store->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    
    
    public function toggleFavorite(Request $request) //menambahkan destinasi ke favorit
    {
        $destinationId = $request->input('destination_id');
        // $userId = Auth::id();
        $userId = $request->input('user_id'); //ini ak deklarasiin sendiri sbg contoh, klo udah pke Auth apus aja

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

    public function destroy($id){
        $data = Trip_destination_detail::find($id);
        // $data = Trip_plan::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

}