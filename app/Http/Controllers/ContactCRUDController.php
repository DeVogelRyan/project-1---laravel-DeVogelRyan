<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactCRUDController extends Controller
{

    public function create(Request $request) {
        //this gives us the currently logged in user
        $user = $request->user();
        $formdata = $request->all();
        if(strlen($formdata['title']) > 20){
            return redirect()->back()->withErrors(['error' => 'The titel can only be 20 charakters long']);
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
