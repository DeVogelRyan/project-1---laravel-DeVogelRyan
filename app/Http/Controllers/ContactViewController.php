<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactViewController extends Controller
{
    public function createContact(){
        return view('contact.create');
    }

    public function viewContact(){
        $contact = Contact::all();
        return view('contact.view', ['contact' => $contact]);
    }

    public function reply($id){
        $contact = Contact::where('id', $id)->first();
        return view('contact.reply', ['contact' => $contact]);
    }

}
