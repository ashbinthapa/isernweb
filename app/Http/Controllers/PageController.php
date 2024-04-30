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



    public function singleChild($parent_slug, $child_slug)
    {
        // Find the parent page
        $parentPage = Page::where('slug', $parent_slug)->first();

        if (!$parentPage) {
            abort(404); // Display a 404 error if the parent page is not found
        }

        // Find the child page under the specified parent
        $childPage = Page::where('slug', $child_slug)
                        ->where('parent_id', $parentPage->id)
                        ->first();

        if (!$childPage) {
            abort(404); // Display a 404 error if the child page is not found under the parent
        }

        return view('page-single', [
            'parentPage' => $parentPage,
            'page' => $childPage
        ]);


        
    }
}
