<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('layouts.noPermission');
        }
        elseif (Auth::user()->hasRole('admin')){
            $users = User::count();
            return view('admindash', ['usercount' => $users]);
        }
    }

    public function viewUsers(){
        if (Auth::user()->hasRole('admin')){
            $users = User::all();
            return view('dashboard.viewUsers', ['users' => $users]);
        }
    }

    public function promote($id){
        if (Auth::user()->hasRole('admin')){
            $user = User::where('id', $id)->first();
            $user->detachRole('user');
            $user->attachRole('admin');
            return redirect()->back()->withSuccess('User succesfully promoted!');
        }
        else {
            return view('layouts.noPermission');
        }
    }

    public function demote($id){
        if (Auth::user()->hasRole('admin')){
            $user = User::where('id', $id)->first();
            $user->detachRole('admin');
            $user->attachRole('user');
            return redirect()->back()->withSuccess('User succesfully Demoted!');
        }
        else {
            return view('layouts.noPermission');
        }
    }
}
