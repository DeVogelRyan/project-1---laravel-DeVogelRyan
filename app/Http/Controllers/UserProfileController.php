<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function getView(){
        $user = Auth::user();
        return view('editProfile.editProfile', ['user' => $user]);
    }
}
