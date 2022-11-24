<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('post.index',[
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
//        if($post->comments->first() !== null){
//            $comments = $post->comments->groupBy('parent_id');
//            $comments['root'] = $comments[''];
//            unset($comments['']);
//
//            return view('post.show',[
//                'post' => $post,
//                'comments' => $comments,
//            ]);
//        } else {
            return view('post.show',[
                'post' => $post,
            ]);
//        }

    }

    public function store(Post $post)
    {
        $post->comments()->create([
            'body' => request('body'),
            'user_id' => 1,
            'post_id' => 1,
            'parent_id' => request('parent_id', null)
        ]);

        return back();
    }
}
