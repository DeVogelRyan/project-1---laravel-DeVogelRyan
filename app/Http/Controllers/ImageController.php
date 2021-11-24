<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {

      return view('images');
    }

    public function store(Request $request)
    {
        $request->validate([
          'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new Image;

        if ($request->file('file')) {
          $imagePath = $request->file('file');
          $imageName = $imagePath->getClientOriginalName();

          $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
        }

        $image->name = $imageName;
        $image->path = '/storage/'.$path;
        $image->save();

        return back()->with('success', 'Image uploaded successfully');
    }
}
