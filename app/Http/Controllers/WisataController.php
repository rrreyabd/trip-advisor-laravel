<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    // Destinasi
    public function destinasi()
    {
        return view('destinasi.destinasi');
    }

    public function destinasi_detail()
    {
        return view('destinasi.destinasi_detail');
    }
}
