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

class PostCrudController extends Controller
{

    public function update(Request $request){
        $post = Post::where('id', $request->currentId)->first();
        if (Auth::user()->id == $post->user->id || Auth::user()->hasRole('admin')){
            $post->update(array('title' => $request->title));
            $post->update(array('content' => $request->content));
            if ($request->file('file')) {
                $OldFile = $post->file;
                $filePath = '/public/postsImg/' . $OldFile;
                Storage::delete($filePath);   //delete the old file
                $image = $request->file('file');
                $imageName = time() . '.' . $image->getClientOriginalName();
                $path = $request->file('file')->storeAs('postsImg', $imageName, 'public');//save the new file
                $file = $imageName;
                $post->update(array('file' => $file));
            }
            return redirect()->back()->withSuccess('Post succesfully edited!');
        }
        else {
            return view('layouts.noPermission');
        }
    }

    public function delete($id){
        $post = Post::where('id', $id)->first();
        if (Auth::user()->id == $post->user->id || Auth::user()->hasRole('admin')){
            $post->delete();
            $OldFile = $post->file;
            $filePath = '/public/postsImg/' . $OldFile;  //delete the old file
            Storage::delete($filePath);
            return redirect()->back()->withSuccess('Post succesfully deleted!');
        }
        else {
            return view('layouts.noPermission');
        }

    }

    public function store(Request $request) {
        //this gives us the currently logged in user
            $user = $request->user();//Auth==user() is also possible
            $formdata = $request->all();
            if ($request->file('file')) {
                $image = $request->file('file');
                $imageName = time() . '.' . $image->getClientOriginalName();
                $path = $request->file('file')->storeAs('postsImg', $imageName, 'public');
                $formdata['file'] = $imageName;
            }
            $user->posts()->create($formdata);
            return redirect()->back()->withSuccess('Post succesfully created!');
    }
}
