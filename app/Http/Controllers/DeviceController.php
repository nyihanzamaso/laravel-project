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
    public function edit(Device $device){
        return view('device.edit_device',['device'=>$device]);
    }
    public function update(Device $device, Request $request){
        $data = $request->validate([
            'location'=>'required',
            'owner'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'industry'=>'required',
            'status'=>'required',
        ]);
        $device->update($data);

        return redirect(route('view_device_list'));
    }
}
