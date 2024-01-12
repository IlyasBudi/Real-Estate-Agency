<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where("is_published", true)->get();
        return view("home", ["posts" => $posts]);
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view("detail", ["post" => $posts]);
    }
}
