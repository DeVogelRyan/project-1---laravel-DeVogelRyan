<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $post = new Post();
        $post->body = $request['body'];
        $request->user()->posts()->save($post);
        return redirect()->route('dashboard');
    }

    public function getView(){
        return view('createPost');
    }
}
