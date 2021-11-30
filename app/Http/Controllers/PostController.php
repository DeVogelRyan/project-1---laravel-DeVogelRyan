<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function edit()
    {
        if (Auth::user()->hasRole('admin')){
            $posts = Post::all();
            return view('posts.edit', ['posts' => $posts]);
        }
        else {
            return view('layouts.noPermission');
        }
    }

    public function update(Request $request){
        $post = Post::where('id', $request->currentId)->first();
        $post->update(array('title' => $request->title));
        $post->update(array('content' => $request->content));
        if ($request->file('file')) {
            $OldFile = $post->file;
            $filePath = '/public/uploads/' . $OldFile;
            Storage::delete($filePath);   //delete the old file
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');//save the new file
            $file = $imageName;
            $post->update(array('file' => $file));
        }

    }

    public function editSingle(Post $id){
        return view('posts.editSingle', [
            "singlePost" => $id
            ]);
    }

    public function delete(Post $id){
        if (Auth::user()->hasRole('admin')){
            $post = Post::where('id', $id->id)->first();
            $post->delete();
            $OldFile = $post->file;
            $filePath = '/public/uploads/' . $OldFile;  //delete the old file
            Storage::delete($filePath);
        }
        else {
            return view('layouts.noPermission');
        }

        //dd($id->id);
    }

    public function getData(){
        $posts = Post::all();
        return view('posts.view', ['posts' => $posts]);
        // get the posts from the logged in user
        // $id = Auth::id();
        // $host = DB::table('posts')->where('user_id', $id)->get();
        // dd($host);
    }

    public function store(Request $request) {
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
        return redirect()->back()->withSuccess('IT WORKS!');
    }


}
