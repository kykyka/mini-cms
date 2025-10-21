<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index(){
        $posts = Post::getByAuthor(Auth::user()->id);

        return view('dashboard', compact('posts',  $posts));
    }
}
