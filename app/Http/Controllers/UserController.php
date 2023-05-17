<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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
}