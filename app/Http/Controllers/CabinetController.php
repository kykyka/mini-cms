<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $posts = $user->posts;
        foreach($posts as $post){
            $post->category = $post->category;
        }

        return view('dashboard', compact('posts',  $posts));
    }
}
