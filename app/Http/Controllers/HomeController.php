<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user'){
                return view('user.user_dashboard');
            }
            else if ($usertype == 'admin'){
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function homepage(){
        return view('home.homepage');
    }
    public function contact_us(){
        return view('home.contact_us');
    }
    public function about_us(){
        return view('home.about_us');
    }
}
