<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;

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

    public function show_forum(Request $request)
    {
        $query = $request->input('query');
        $forums = Forum::where('title', 'LIKE', '%' . $query . '%')->get();
        $replies = Reply::all();

        return view('forum.forum_search', [
            'forums'    => $forums,
            'replies'   => $replies,
            'query'   => $query
            
        ]);
    }

    
    public function forum_detail($id)
    {
        $forum = Forum::find($id);
        $replies = Reply::where('forum_id', $id)->get();


        return view('forum.forum_detail', [
            'forum'    => $forum,
            'replies'   => $replies
            
        ]);
    }

}
