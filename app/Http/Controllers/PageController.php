<?php

namespace App\Http\Controllers;

use App\Models\Page; // Import the Page model

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Page::all(); // Retrieve all pages from the database
        return view('post-archive', ['posts' => $posts]);
    }
    
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if (!$page) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('page-single', ['page' => $page]);
    }
}