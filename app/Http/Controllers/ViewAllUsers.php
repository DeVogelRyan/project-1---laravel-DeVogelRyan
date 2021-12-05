<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ViewAllUsers extends Controller
{
    public function getAll(){
        $user = User::all();
        return view('users.viewAllUsers', ['users' => $user]);
    }

    public function getSingle($id){
        $user = User::where('id', $id)->first();
        $age = Carbon::parse($user->date_of_birth)->diff(Carbon::now())->y;
        return view('users.viewSingleUser', ['user' => $user, 'age' => $age]);
    }

    public function getHistory($id){
        $user = User::where('id', $id)->first();
        return view('users.userHistory', ['user' => $user]);
    }
}
