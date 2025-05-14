<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
class PostContoller extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function create(){
        $post = new Post();
        $post -> title = request('title');
        $post-> body = request('body');
        $post->save();
    }
}
