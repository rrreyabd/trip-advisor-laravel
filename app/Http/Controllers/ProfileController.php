<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile
    public function profile()
    {
        return view('profile.profile');
    }

    // Ulas
    public function ulas()
    {
        return view('ulas.ulas');
    }
}
