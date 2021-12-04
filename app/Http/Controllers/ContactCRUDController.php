<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;

class ContactCRUDController extends Controller
{

    public function create(Request $request) {
        //this gives us the currently logged in user
        $user = $request->user();
        $formdata = $request->all();
        if(strlen($formdata['title']) > 10){
            return redirect()->back()->withErrors(['error' => 'The titel can only be 10 charakters long']);
        }
        else {
            $user->contact()->create($formdata);
            return redirect()->back()->withSuccess('IT WORKS!');
        }
    }

    public function delete($id){

    }

}
