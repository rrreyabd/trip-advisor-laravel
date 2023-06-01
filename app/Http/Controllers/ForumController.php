<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;
use Carbon\Carbon;

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


    public function add_reply(Request $request) {
        $validated = $request->validate([
            'reply' => 'required',
            'forum_id' => 'required',
            'user_id' => 'required'
        ]);
    
        $new_reply = new Reply;
        $new_reply->forum_id    =   $request->forum_id;
        $new_reply->user_id     =   $request->user_id;
        $new_reply->content     =   $request->reply;
        
        $new_reply->save();
        return redirect()->route('forum_detail', ['id' => $new_reply->forum_id])->with('success', 'Balasan berhasil ditambahkan');
    }

    public function tanya_forum() {
        return view('forum.tanya_forum');
    }

    public function add_forum(Request $request) {
        $validated = $request->validate([
            'user_id'       => 'required',
            'title'         => 'required|min:10|max:255',
            'content'       => 'required|min:10|',
        
        ]);

        $new_forum = new Forum;
        $new_forum->user_id    =   $request->user_id;
        $new_forum->title      =   $request->title;
        $new_forum->content    =   $request->content;
        $new_forum->created_at =   $request->created_at;
        
        $new_forum->save();
        
        return redirect()->route('forum_detail', ['id' => $new_forum->id])->with('success', 'Forum berhasil ditambahkan');
    }

    public function delete_forum($id) {
        $replies = Reply::where('forum_id', $id)->delete();
        $forum  = Forum::find($id)->delete();

        return redirect('forum')->with('success', ' Forum berhasil dihapus');
    }

}
