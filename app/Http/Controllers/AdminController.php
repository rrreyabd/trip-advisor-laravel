<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Index
    public function admin()
    {
        return view('admin.admin');
    }
}
