<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user'){
                return view('user.user_dashboard');
            }
            if ($usertype == 'admin'){
                return view('admin.index');
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
        ]);
        $user->update($data);

        return redirect(route('userlist'));
    }

    public function destroy(User $user){
        $user -> delete();
        return redirect(route('userlist'));
    }
}
