<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Device;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Device $device, User $user){
        $device_count = Device::count();
        $count_users = User::count();
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $name = Auth()->user()->name;
            if ($usertype == 'user'){
                $user = User::all();
                $device = Device::all();
                return view('user.user_dashboard',['device'=>$device, 'name'=>$name]);
            }
            if ($usertype == 'admin'){
                return view('admin.index',['device_count'=>$device_count, 'count_users'=>$count_users]);
            }
            else{
                return redirect()->back();
            }
        }

    }
    public function userlist(){
        $user = User::all();
        return view('admin.usermanagment', ['user'=> $user]);
    }
    public function device(){
        return view('admin.device');
    }
    public function edit(User $user){
        return view('admin.edit',['user' => $user]);
    }
    public function update(User $user, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'usertype'=>'required',
        ]);
        $user->update($data);

        return redirect(route('userlist'));
    }

    public function destroy(User $user){
        $user -> delete();
        return redirect(route('userlist'));
    }
    public function add_user(){
        return view('admin.add_user');
    }
    public function create(Request $request){
                $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $user = User::create($data);

        return redirect(route('userlist'));
    }
    public function view(User $user){
        return view('admin.view_user',['user'=>$user]);
    }
        public function device_page(){
        return view('device.assign_new_device');
    }
    public function assign(Request $request){
            $data = $request->validate([
            'location' => 'required',
            'status' => 'required',
            'owner' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'industry' => 'required',
        ]);
        $device = Device::create($data);

        return redirect(route('userlist'));
    }
}
