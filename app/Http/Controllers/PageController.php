<?php

namespace App\Http\Controllers;

use App\Models\Page; // Import the Page model

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function single($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if (!$page) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('page-single', ['page' => $page]);
    }
}
