<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Photo;


class ProfileController extends Controller
{
    public function ulas() {
        return view('profile.ulas');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function show_profile(Request $request): View
    {
        return view('profile.profile');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function profile_detail() {
        return view('profile.profile');
    }

    public function edit_bio(Request $request, $id)
    {
        $users = User::find($id);

        $validated = $request->validate([
            'firstName'             => 'required|max:20',
            'lastName'              => 'required|max:20',
            'username'              => 'nullable|min:1|max:20',
            'address'               => 'nullable|max:255',
            'post_code'             => 'nullable|min:5|max:20',
            'city'                  => 'nullable|max:255',
            'province'              => 'nullable|max:255',
            'country'               => 'nullable|max:255',
            'website'               => 'nullable|max:255',
            'about'                 => 'nullable',
            'photo'                 => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
            // 'created_at'        => 'required'
        ]);
        
        $users->firstName               = $request->firstName;
        $users->lastName                = $request->lastName;
        $users->username                = $request->username;
        $users->address                 = $request->address;
        $users->post_code               = $request->post_code;
        $users->city                    = $request->city;
        $users->province                = $request->province;
        $users->country                 = $request->country;
        $users->website                 = $request->website;
        $users->about                   = $request->about;
        // $users->created_at            = $request->created_at;

        if ($request->hasFile('photo')) {
            // define image location in local path
            $location = public_path('/img/profile_photo');

            // ambil file img dan simpan ke local server
            $request->file('photo')->move($location, $request->file('photo')->getClientOriginalName());

            // simpan nama file di database
            $users->profile_photo = $request->file('photo')->getClientOriginalName();
        }

        $users->save();
        return redirect()->route('profile_detail', ['id' => $users->id])->with('success', 'Bio berhasil diperbaharui');
    }

    public function store_photo(Request $request){
        // $photo = $request->validate([
        //     'user_id'       =>  'required|integer|min:1',
        //     'destinationId' => 'required|integer|min:1',
        //     'content'       => 'required|string|max:500',
        //     'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        $user_id = $request->input('user_id');
        // dd($user_id);
        $destination_id = $request->input('destinationId');
        // dd($destination_id);
        $content = $request->input('content');
        // dd($content);
        $photo = null;
        
            if ($request->hasFile('image')) {
                // define image location in local path
                $location = public_path('/img/upload_photo');
    
                // ambil file img dan simpan ke local server
                $request->file('image')->move($location, $request->file('image')->getClientOriginalName());
    
                // simpan nama file di database
                $photo = $request->file('image')->getClientOriginalName();
            }
            // dd($photo);
        $store = new Photo();
        $store->user_id = $user_id;
        $store->destination_id = $destination_id;
        $store->content = $content;
        $store->photo = $photo;
        
        $store->save();
         return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

}
