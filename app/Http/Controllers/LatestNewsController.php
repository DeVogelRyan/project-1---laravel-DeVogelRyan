<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LatestNewsController extends Controller
{
    public function latestNewsView()
    {
            $latestNews = LatestNews::all();
            return view('welcome', ['latestNews'=> $latestNews]);
    }

    public function editSingle($id){
        $latest = LatestNews::where('id', $id)->first();
        return view('latestNews.editSingle', ['latestNews'=> $latest]);
    }

    public function latestNewsCreate()
    {
        if(Auth::user()->hasrole('admin'))
            return view('latestNews.create');
        else
            return view('layouts.noPermission');

    }

    public function create(Request $request){
        if(Auth::user()->hasrole('admin')){
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
        }else {
            return view('layouts.noPermission');
        }
    }

    public function update(Request $request){
        if(Auth::user()->hasrole('admin')){
        $latest = LatestNews::where('id', $request->currentId)->first();
        $latest->update(array('title' => $request->title));
        $latest->update(array('content' => $request->content));
        if ($request->file('file')) {
            $OldFile = $latest->file;
            $filePath = '/public/LatestImg/' . $OldFile;
            Storage::delete($filePath);   //delete the old file
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $path = $request->file('file')->storeAs('LatestImg', $imageName, 'public');//save the new file
            $file = $imageName;
            $latest->update(array('file' => $file));
        }
        return redirect()->back()->withSuccess('Post succesfully edited!');
        }else {
            return view('layouts.noPermission');
        }
    }

    public function delete($id){
        if (Auth::user()->hasRole('admin')){
            $latest = LatestNews::where('id', $id)->first();
            $latest->delete();
            $OldFile = $latest->file;
            $filePath = '/public/LatestImg/' . $OldFile;  //delete the old file
            Storage::delete($filePath);
            return redirect()->back()->withSuccess('Post succesfully deleted!');
        }
        else {
            return view('layouts.noPermission');
        }

    }
}
