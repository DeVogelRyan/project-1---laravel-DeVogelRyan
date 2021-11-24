<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
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

        $formdata = $request->all();


        if ($request->file('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $formdata['file'] = $imageName;
        }

        $user->posts()->create($formdata);



        return "Post successfully saved";



    }


}
