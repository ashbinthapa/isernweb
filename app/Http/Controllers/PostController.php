<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postdata = Post::all(); // Retrieve all posts from the database
        return view('index', ['posts' => $postdata]);
    }
}
