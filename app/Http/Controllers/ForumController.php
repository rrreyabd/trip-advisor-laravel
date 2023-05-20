<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    // Forum
    public function forum()
    {
        return view('forum.forum');
    }
    // public function forum_search()
    // {
    //     return view('forum.forum_search');
    // }
    public function forum_detail()
    {
        return view('forum.forum_detail');
    }

    public function show_forum()
    {
        $forums = Forum::all();
        return view('forum.forum_search', [
            'forums' => $forums
        ]);
    }
}
