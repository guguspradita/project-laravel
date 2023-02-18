<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return View('posts', [
            "title" => "Blog",
            "posts" => Post::All(),
            // membawa key post ke view, beserta fillabel didalam model
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            // find digunakan untuk mencari id
            "post" => $post
            // membawa key post ke view, beserta semua data didalam database model
        ]);
    }
}
