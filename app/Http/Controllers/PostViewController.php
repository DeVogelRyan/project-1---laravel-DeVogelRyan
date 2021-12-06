<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostViewController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getViewCreate()
    {
        return view('posts.create');
    }

    public function getViewEdit()
    {
        if (Auth::user()->hasRole('admin')){
            $posts = Post::all();
            return view('posts.edit', ['posts' => $posts]);
        }
        else {
            return view('layouts.noPermission');
        }
    }

    public function editSingle($id){
        dd($id);
        $post = Post::where('id', $id)->first();
        if (Auth::user()->id == $post->user->id || Auth::user()->hasRole('admin')){
            return view('posts.editSingle', [
                "singlePost" => $post]);
            }
        else {
            return view('layouts.noPermission');
        }
    }

    public function getData(){
        $posts = Post::all();
        return view('posts.view', ['posts' => $posts]);
        // get the posts from the logged in user
        // $id = Auth::id();
        // $host = DB::table('posts')->where('user_id', $id)->get();
        // dd($host);
    }
}
