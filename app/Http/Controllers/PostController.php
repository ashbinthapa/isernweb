<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use App\Models\Category; // Import the Post model


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

    public function categoryArchive($categorySlug)
    {
        // Retrieve the category based on the slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Retrieve posts belonging to the category
        $posts = Post::where('category_id', $category->id)
                    ->where('is_published', true) // Filter only published posts
                    ->get();

        return view('post-archive', ['posts' => $posts]);
    }
}
