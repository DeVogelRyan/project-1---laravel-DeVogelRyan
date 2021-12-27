<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactCRUDController extends Controller
{

    public function create(Request $request) {
        //this gives us the currently logged in user
        $user = $request->user();
        $formdata = $request->all();
        $validation = Validator::make($request->all(),
        ['title' => 'required|string|min:3|max:25|nullable']);
        if (!$validation->passes()){
            return redirect()->back()->withErrors(['error' => 'The titel needs to be atleast 3 charakters an has a max of 25 charakters!']);
        }
        else {
            $user->contact()->create($formdata);
            return redirect()->back()->withSuccess('Contact form has succesfully been send!');
        }
    }


    public function delete($id){
        if (Auth::user()->hasRole('admin')){
            $contact = Contact::where('id', $id)->first();
            $contact->delete();
            return redirect()->back()->withSuccess('Ticket succesfully deleted!');
        }
        else {
            return view('layouts.noPermission');
        }
    }


}
