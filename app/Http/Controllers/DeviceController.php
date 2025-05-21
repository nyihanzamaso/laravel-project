<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(){
        return view('device.assign_new_device');
    }
    public function assign(Request $request){
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
}
