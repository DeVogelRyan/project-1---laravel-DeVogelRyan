<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use App\Models\LatestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('layouts.noPermission');
        }
        elseif (Auth::user()->hasRole('admin')){
            $usercount = User::count();
            $postcount = Post::count();
            $latestcount = LatestNews::count();
            $ticketcount = Contact::count();
            $faqcount = Faq::count();
            return view('admindash', ['usercount' => $usercount, 'postcount' => $postcount,
            'latestcount' => $latestcount, 'ticketcount' => $ticketcount, 'faqcount' => $faqcount]);
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
