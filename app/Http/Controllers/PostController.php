<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
   public function index()
   {
       return view('posts',[
        "posts" => Post::all(),
        "title" => "Blog"
       ]);
   }

    public function show($slug)
    {
        return view('post', [
            "title" => "single Post",
            "post" => Post::find($slug)
        ]);
    }

}
