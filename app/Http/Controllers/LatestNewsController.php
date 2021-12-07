<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function latestNewsView()
    {
        $latestNews = LatestNews::all();
        return view('welcome', ['latestNews'=> $latestNews]);
    }

    public function latestNewsCreate()
    {
        return view('latestNews.create');
    }

    public function create(Request $request){
        $user = $request->user();
        $formdata = $request->all();
        if ($request->file('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $path = $request->file('file')->storeAs('LatestImg', $imageName, 'public');
            $formdata['file'] = $imageName;
        }
        $user->latestNews()->create($formdata);
        return redirect()->back()->withSuccess('Post succesfully created!');
    }
}
