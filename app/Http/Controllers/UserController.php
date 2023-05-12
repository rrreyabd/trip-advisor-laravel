<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // index
    public function index()
    {
        return view('index');
    }


    // forum
    public function forum()
    {
        return view('forum.forum');
    }
    public function forum_search()
    {
        return view('forum.forum_search');
    }
    public function forum_detail()
    {
        return view('forum.forum_detail');
    }


    // Topbar
    public function ulas()
    {
        return view('ulas.ulas');
    }
}