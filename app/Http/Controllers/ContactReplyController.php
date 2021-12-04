<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\ContactComment;
use Illuminate\Support\Facades\Mail;

class ContactReplyController extends Controller
{
    public function store(Request $request){
        $formdata = $request->all();
        $user = User::where('id', $formdata['UserId'])->first();
        Mail::send('emails.Reply', ['formdata' => $formdata, 'user' => $user],
        function($message) use ($formdata, $user){
            $message->to($user->email,$user->name)
            ->subject('Information concerning your ticket');
        });
        return redirect()->back()->withSuccess('The email has been succesfully send!');
    }
}
