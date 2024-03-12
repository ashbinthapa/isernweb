<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function archive()
    {
        $posts = Post::all(); // Retrieve all posts from the database
        return view('post-archive', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        if (!$post) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('post-single', ['post' => $post]);
    }
}
