<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Forum;
use App\Models\User;
use App\Models\Hotel_feature;
use App\Models\Photo;
use App\Models\Price;
use App\Models\Comment_photo;
use App\Models\Trip_destination_detail;
use App\Models\Restaurant_type;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Restaurant_feature;
class AdminController extends Controller
{

    public function count_all() {
        $count_users = User::all()->count();
        $count_tours = Destination::where('destination_type', 'wisata')->count();
        $count_hotels = Destination::where('destination_type', 'hotel')->count();
        $count_restaurants = Destination::where('destination_type', 'restoran')->count();
        
        return view('admin.admin-layout', [
            'count_restaurants' => $count_restaurants,
            'count_hotels' => $count_hotels,
            'count_tours' => $count_tours,
            'count_users' => $count_users
        ]);
    }

    public function show_all_users() {
        $users = User::all();
        
        return view('admin.manage-user', [
            'users' => $users 
        ]);
    }

    public function show_all_destinations() {
        $destinations = Destination::all();

        return view('admin.manage-destination', [
            'destinations' => $destinations
        ]);
    }

    public function show_detail_destination($id) {
        $destination = Destination::find($id);
    
        return view('admin.manage-destination-detail', [
            'destination' => $destination
        ]);
    }

    public function delete_destination($id) {
            $destination = Destination::find($id);
            $hotel_features = Hotel_feature::where('destination_id', $id)->delete();
            $photos = Photo::where('destination_id', $id)->delete();
            $prices = Price::where('destination_id', $id)->delete();
            $comment_photos = Comment_photo::where('destination_id', $id)->delete();
            $trip_destination_details = Trip_destination_detail::where('destination_id', $id)->delete();
            $restaurant_types = Restaurant_type::where('destination_id', $id)->delete();
            $comments = Comment::where('destination_id', $id)->delete();
            $favorites = Favorite::where('destination_id', $id)->delete();
            $restaurant_features = Restaurant_feature::where('destination_id', $id)->delete();

            $destination->delete();
            return redirect('admin/manage-destination')->with('success', ' Destinasi berhasil dihapus');
    }

    public function show_all_forums() {
        $forums = Forum::all();

        return view('admin.manage-forum', [
            'forums' => $forums
        ]);
    }
}
