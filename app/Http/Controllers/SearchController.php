<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Page;
use App\Models\Publication;
use App\Models\Research;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Perform search across all relevant models
        $posts = Post::where('title', 'like', '%' . $query . '%')->get();
        $pages = Page::where('title', 'like', '%' . $query . '%')->get();
        $publications = Publication::where('title', 'like', '%' . $query . '%')->get();
        $researches = Research::where('title', 'like', '%' . $query . '%')->get();

        // Combine search results
        $searchResults = collect([$posts, $pages, $publications, $researches])->flatten();

        // Pass the search results to the view
        return view('search', compact('searchResults', 'query'));
    }
}
