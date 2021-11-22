<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function getData(){

        //This is the only way to get the user somehow.
        $posts = Post::all();

        return view('posts.getData', ['posts' => $posts]);

        // $posts = DB::table('posts')->select('user_id')->get(); // or whatever, just get one log
        // dd($posts);

        // get the posts from the logged in user
        // $id = Auth::id();
        // $host = DB::table('posts')->where('user_id', $id)->get();
        // dd($host);

    }


    public function store(Request $request)
    {

        //this gives us the currently logged in user
        $user = $request->user();

        //this fetches all the post data from the form
        //we can post all the data from post and not get an error
        // because laravel handles this in Post model through fillable array
        //Laravel will only save the data from the key that is in the fillables array
        $formData = $request->all();
        $title =$request->get('title');
        // we need a seo bot readable url, this will create a slug based on title
        //$formData['slug'] = Str::slug($title+$id);

        //this creates posts based on the relation from user to post
        //meaning the id of user is automatically populated and saved in the user_id column of posts table
        $user->posts()->create($formData);

        return "Post successfully saved";
    }


}
