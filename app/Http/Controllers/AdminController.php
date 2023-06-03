<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Forum;
use App\Models\User;
use App\Models\Photo;
use App\Models\Price;
use App\Models\Comment_photo;
use App\Models\Trip_destination_detail;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Partner;
use App\Models\Reply;
use App\Models\Trip_plan;
use App\Models\Feature;
use App\Models\Destination_feature;

class AdminController extends Controller
{

    // READ
    public function count_all() {
        $count_users = User::where('user_role', 'user')->count();
        $count_admins = User::where('user_role', 'admin')->count();
        $count_tours = Destination::where('destination_type', 'wisata')->count();
        $count_hotels = Destination::where('destination_type', 'hotel')->count();
        $count_restaurants = Destination::where('destination_type', 'restoran')->count();
        $count_forums = Forum::all()->count();
        $count_partners = Partner::all()->count();
        
        return view('admin.admin-layout', [
            'count_restaurants' => $count_restaurants,
            'count_hotels' => $count_hotels,
            'count_tours' => $count_tours,
            'count_users' => $count_users,
            'count_admins' => $count_admins,
            'count_partners' => $count_partners,
            'count_forums' => $count_forums
        ]);
    }

    public function show_all_users() {
        $users = User::where('user_role', 'user')->get();
        
        return view('admin.manage-user', [
            'users' => $users 
        ]);
    }

    public function show_all_forums() {
        $forums = Forum::all();

        return view('admin.manage-forum', [
            'forums' => $forums
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
        $destination_features = Destination_feature::where('destination_id', $id)->get(); 
        $features = Feature::whereIn('id', $destination_features->pluck('feature_id'))->get();
        $partner = Price::where('destination_id', $id)->get();
        $partners = Partner::whereNotIn('id', $partner->pluck('partner_id'))
        ->get();

        $restaurant_features = Feature::whereNotIn('id', $destination_features->pluck('feature_id'))
        ->whereIn('category', ['restoran', 'semua kategori'])
        ->get();
        
        $hotel_features = Feature::whereNotIn('id', $destination_features->pluck('feature_id'))
        ->whereIn('category', ['hotel', 'semua kategori'])
        ->get();

        $wisata_features = Feature::whereNotIn('id', $destination_features->pluck('feature_id'))
        ->whereIn('category', ['wisata', 'semua kategori'])
        ->get();

        return view('admin.manage-destination-detail', [
            'destination' => $destination,
            'features' => $features,
            'restaurant_features' => $restaurant_features,
            'hotel_features' => $hotel_features,
            'wisata_features' => $wisata_features,
            'destination_features' => $destination_features,
            'partner' => $partner,
            'partners' => $partners
        ]);
    }

    public function show_all_replies($id) {
        $forum = Forum::find($id);
        $replies = Reply::where('forum_id', $id)->get();
        return view('admin.manage-forum-reply', [
            'replies' => $replies,
            'forum' => $forum
        ]);
    }

    public function show_all_partners() {
        $partners = Partner::all();
        return view('admin.manage-partner', [
            'partners' => $partners
        ]);
    }

    public function show_all_comments() {
        $comments = Comment::all();
        return view('admin.manage-ulasan', [
            'comments' => $comments
        ]);
    }

    // DELETE
    public function delete_destination($id) {
            $destination                = Destination::find($id);
            $destination_features       = Destination_feature::where('destination_id', $id)->delete();
            $photos                     = Photo::where('destination_id', $id)->delete();
            $prices                     = Price::where('destination_id', $id)->delete();
            $comment_photos             = Comment_photo::where('destination_id', $id)->delete();
            $trip_destination_details   = Trip_destination_detail::where('destination_id', $id)->delete();
            $comments                   = Comment::where('destination_id', $id)->delete();
            $favorites                  = Favorite::where('destination_id', $id)->delete();

            $destination->delete();
            return redirect('admin/manage-destination')->with('success', ' Destinasi berhasil dihapus');
    }
    
    public function delete_user($id) {
        $user       = User::find($id);
        $trip_plan  = Trip_plan::where('user_id', $id)->delete();
        $reply      = Reply::where('user_id', $id)->delete();
        $favorite   = Favorite::where('user_id', $id)->delete();
        $forum      = Forum::where('user_id', $id)->delete();
        $comment    = Comment::where('user_id', $id)->delete();
        $photo      = Photo::where('user_id', $id)->delete();

        $user->delete();
        return redirect('/admin/manage-user')->with('success', ' Pengguna berhasil dihapus');
    }

    public function delete_forum($id) {
        $forum  = Forum::find($id);
        $reply  = Reply::where('forum_id', $id)->delete();

        $forum->delete();
        return redirect('/admin/manage-forum')->with('success', ' Forum berhasil dihapus');
    }

    public function delete_reply($id) {
        $reply      = Reply::find($id)->delete();

        return redirect('/admin/manage-forum')->with('success', ' Reply berhasil dihapus');
    }

    public function delete_partner($id) {
        $price = Price::where('partner_id', $id)->delete();
        $partner = Partner::find($id)->delete();

        return redirect('/admin/manage-partner')->with('success', ' Mitra berhasil dihapus');
    }

    public function delete_feature($id) {
        $feature = Destination_feature::find($id)->delete();
        
        return redirect()->back()->with('success', 'Fasilitas berhasil dihapus')->header('Refresh', '1');
    }

    public function delete_ulasan($id) {
        $comment_photo = Comment_photo::where('comment_id', $id)->delete();
        $comment = Comment::find($id)->delete();
        return redirect()->back()->with('success', 'Ulasan berhasil dihapus')->header('Refresh', '1');
    }

    public function delete_price($id) {
        $price = Price::find($id)->delete();
        
        return redirect()->back()->with('success', 'Partner berhasil dihapus')->header('Refresh', '1');
    }

    // UPDATE
    public function edit_destination(Request $request, $id)
    {
        $destination = Destination::find($id);

        $validated = $request->validate([
            'destination_name'  => 'required|min:5|max:50',
            'destination_type'  => 'required|in:wisata,hotel,restoran',
            'address'           => 'required|max:255',
            'city'              => 'required|max:255',
            'country'           => 'required|max:255',
            'website'           => 'required|max:255',
            'contact'           => 'required|max:255',
            'category'          => 'required|max:255',
            'map'               => 'required|max:65535',
            'photo'             => 'image|mimes:jpg,jpeg,png|max:10240',
            'created_at'        => 'required'
        ]);
        
        $destination->destination_name      = $request->destination_name;
        $destination->destination_type      = $request->destination_type;
        $destination->address               = $request->address;
        $destination->city                  = $request->city;
        $destination->country               = $request->country;
        $destination->website               = $request->website;
        $destination->contact               = $request->contact;
        // $destination->photo                 = $request->photo;
        $destination->map                   = $request->map;
        $destination->category              = $request->category;
        $destination->created_at            = $request->created_at;

        if ($request->hasFile('photo')) {
            // define image location in local path
            $location = public_path('/img/destinasi');

            // ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // simpan nama file di database
            $destination->photo = $request->file('photo')->getClientOriginalName();
        }

        $destination->save();
        return redirect('/admin/manage-destination',)->with('success', 'Destinasi berhasil diperbaharui');
    }

    public function update_partner($id) {
        $partner = Partner::find($id);

        return view('admin.edit-partner',[
            'partner' => $partner
        ]);
    }

    public function edit_partner(Request $request, $id)
    {
        $partner = Partner::find($id);
        
        $validated = $request->validate([
            'partner'           => 'required|max:255',
            'website'           => 'required|max:255',
            'created_at'        => 'required',
            'photo'             => 'image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $partner->partner       = $request->partner;
        $partner->website       = $request->website;
        $partner->created_at    = $request->created_at;


        if ($request->hasFile('photo')) {

            // define image location in local path
            $location = public_path('/img/partner');

            // ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // simpan nama file di database
            $partner->photo = $request->file('photo')->getClientOriginalName();
        } else {
            $partner->photo;
        }

        $partner->save();
        return redirect('/admin/manage-partner',)->with('success', 'Mitra berhasil diperbaharui');
    }

    // CREATE
    public function add_destination(Request $request)
    {

        // $validated = $request->validate([
        //     'rating_id'         => 'nullable|exists:ratings,id',
        //     'destination_name'  => 'required|min:5|max:50',
        //     'destination_type'  => 'required|in:wisata,hotel,restoran',
        //     'address'           => 'required|max:255',
        //     'city'              => 'required|max:255',
        //     'country'           => 'required|max:255',
        //     'website'           => 'required|max:255',
        //     'contact'           => 'required|max:255',
        //     'category'          => 'required|max:255',
        //     'map'               => 'required|max:65535',
        //     'photo'             => 'image|mimes:jpg,jpeg,png|max:10240'
        // ]);
        
        $new_destination = new Destination;
        $new_destination->destination_name      = $request->destination_name;
        $new_destination->destination_type      = $request->destination_type;
        $new_destination->category              = $request->category;
        $new_destination->address               = $request->address;
        $new_destination->city                  = $request->city;
        $new_destination->country               = $request->country;
        $new_destination->map                   = $request->map;
        $new_destination->website               = $request->website;
        $new_destination->contact               = $request->contact;
        // $new_destination->photo                 = $request->photo;

        if ($request->hasFile('photo')) {
            // define image location in local path
            $location = public_path('/img/destinasi');

            // ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // simpan nama file di database
            $new_destination->photo = $request->file('photo')->getClientOriginalName();
        }

        $new_destination->save();
        return redirect('/admin/manage-destination',)->with('success', 'Destinasi berhasil ditambakan');
    }

    public function add_partner(Request $request)
    {

        $validated = $request->validate([
            'partner'           => 'required|max:255',
            'website'           => 'required|max:255',
            'photo'             => 'image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $new_partner = new Partner;
        $new_partner->partner      = $request->partner;
        $new_partner->website      = $request->website;


        if ($request->hasFile('photo')) {

            // define image location in local path
            $location = public_path('/img/partner');

            // ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // simpan nama file di database
            $new_partner->photo = $request->file('photo')->getClientOriginalName();
        }

        $new_partner->save();
        return redirect('/admin/manage-partner',)->with('success', 'Mitra berhasil ditambahkan');
    }

    public function add_feature(Request $request)
    {
        $checkboxes = $request->input('checkbox');
        $destination_id = $request->input('destination_id');
        
        if (!empty($checkboxes)) {
            foreach ($checkboxes as $checkbox) {
                Destination_feature::create([
                    'feature_id' => $checkbox,
                    'destination_id' => $destination_id
                ]);
            }
        }
        return redirect()->back()->with('success', 'Fasilitas berhasil ditambahkan')->header('Refresh', '1');
    }

    public function add_price(Request $request) {
        $checkboxes = $request->input('checkbox');
        $destination_id = $request->input('destination_id');
        $price = $request->input('price');
        
        if (!empty($checkboxes)) {
            foreach ($checkboxes as $index => $checkbox) {
                // Mendapatkan nilai 'partner_id' dari setiap checkbox yang dipilih
                $partner_id = $checkbox; // Ganti ini dengan logika yang sesuai
                
                // Mendapatkan harga yang sesuai menggunakan indeks dalam array $price
                $partner_price = $price[$index]; // Ganti ini dengan logika yang sesuai
        
                Price::create([
                    'partner_id' => $partner_id,
                    'destination_id' => $destination_id,
                    'price' => $partner_price
                ]);
            }
        }
        
        return redirect()->back()->with('success', 'Partner berhasil ditambahkan')->header('Refresh', '1');
    }        

}
