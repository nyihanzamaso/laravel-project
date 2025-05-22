<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(User $user){
        return view('device.assign_new_device',['user'=>$user]);
    }
    public function assign(Request $request, User $user){
        $data =$request->validate([
            'location'=>'required',
            'owner'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'industry'=>'required',
            'status'=>'nullable',

        ]);
        $newDevice=Device::create($data);

        return redirect(route('userlist'));
    }
    public function view_device_list(){
        $device = Device::all();
        return view('device.device_manager',['device'=>$device]);
    }
}
