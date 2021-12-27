<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    public function getView(){
        $user = Auth::user();
        return view('editProfile.editProfile', ['user' => $user]);
    }

    public function update(Request $request){
        $validation = Validator::make($request->all(),
        ['email' => ['required',Rule::unique('users')->ignore(Auth::user()->id)]]);//check if email is unique
        if ($validation->passes()){
            $user = Auth::user();
            $user->update(array('name' => $request->name, 'email' => $request->email, 'bio' => $request->bio, 'profile_img' => $request->profile_img));
            return redirect()->back()->withSuccess('Profile succesfully updated!');
        }
        else {
            return redirect()->back()->withErrors(['error' => 'Your email has to be unique!']);
        }
    }
}
