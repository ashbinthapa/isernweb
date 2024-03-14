<?php

namespace App\Http\Controllers;

use App\Models\Timeline; // Import the Timeline model

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display the single-timeline.
     */
    public function single($slug)
    {
        $data = Timeline::where('slug', $slug)->firstOrFail();

        if (!$data) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('timeline-single', ['data' => $data]);
    }
}
