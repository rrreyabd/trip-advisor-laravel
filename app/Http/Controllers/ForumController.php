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
        /* 
        SELECT *
        FROM forums
        WHERE title LIKE '%query%';
        */

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
        $replies = Reply::where('forum_id', $id)->orderBy('id', 'desc')->get();

        /*
        SELECT *
        FROM replies
        WHERE forum_id = $id
        ORDER BY id DESC;
        */

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

        /*
        INSERT INTO replies (forum_id, user_id, content)
        VALUES ($validated->forum_id, $validated->user_id, $validated->content);
        */

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
        $new_forum->save();
        
        // INSERT INTO forums (user_id, title, content, created_at, updated_at) 
        // VALUES ($validated->user_id, '$validated->title', '$validated->content', NOW(), NOW());

        return redirect()->route('forum_detail', ['id' => $new_forum->id])->with('success', 'Forum berhasil ditambahkan');
    }

    public function delete_forum($id) {
        $replies = Reply::where('forum_id', $id)->delete();
        $forum  = Forum::find($id)->delete();
        /*
        DELETE FROM replies WHERE forum_id = $id;
        DELETE FROM forums WHERE id = $id;
        */

        return redirect('forum')->with('success', ' Forum berhasil dihapus');
    }

    public function delete_reply($id) {

        $reply  = Reply::find($id)->delete();
        // DELETE FROM replies WHERE id = $id;


        return redirect('/forum-search')->with('success', ' Reply berhasil dihapus');
    }

}
