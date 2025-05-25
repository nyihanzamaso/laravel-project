<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Device;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
}
