<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getView(){
        return view('contact.create');
    }


    public function create(Request $request) {
        //this gives us the currently logged in user
        $user = $request->user();
        $formdata = $request->all();
        $user->contact()->create($formdata);
        return redirect()->back()->withSuccess('IT WORKS!');
    }

}
