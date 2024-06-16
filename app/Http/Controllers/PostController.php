<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use App\Models\Category; // Import the Post model


use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'category_id' => 'nullable|exists:categories,id',
            'title' => 'required|string',
            'slug' => 'required|string|unique:posts,slug',
            'content' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'seo_title' => 'nullable|string|max:60',
            'seo_description' => 'nullable|string|max:160',
            'image' => 'nullable|image|max:2048'
        ]);

        $validatedData['slug'] = Str::slug($validatedData['slug']);

        $post = Post::create($validatedData);

        return redirect()->route('posts.show', $post);
    }
    
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
        $posts = Post::where('category_id', $category->id)->get();

        return view('post-archive', ['posts' => $posts]);
    }
}
