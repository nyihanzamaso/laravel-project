<?php

namespace App\Http\Controllers;
use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Device $device, User $user){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $name = Auth()->user()->name;
            if ($usertype == 'user'){
                $user = User::all();
                $device = Device::all();
                return view('user.user_dashboard',['name'=>$name, 'device'=>$device]);
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
