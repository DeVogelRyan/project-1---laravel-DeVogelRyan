<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }
        elseif (Auth::user()->hasRole('admin')){
            $users = User::count();
            return view('admindash', ['usercount' => $users]);
        }
    }
}
