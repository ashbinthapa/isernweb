<?php

namespace App\Http\Controllers;

use App\Models\Research; // Import the Research model

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function archive()
    {
        /*
        $all_research = Research::all(); // Retrieve all posts from the database
        */    
        $completed_research = Research::where('research_status', 'completed')->get(); // Retrieve all completed research from the database

        $ongoing_research = Research::where('research_status', 'ongoing')->get(); // Retrieve all ongoing research from the database

        $data = [
            /*
            'all_research' => $all_research,
            */
            'completed_research' => $completed_research,
            'ongoing_research' => $ongoing_research, 
        ];
        return view('research-archive', ['research_data' => $data]);
    }

    /**
     * Display the specified resource.
    */
    public function status($research_status)
    {
        $data = Research::where('research_status', $research_status)->get();

        if (!$data) {
            abort(404);
        }

        return view('research-status', ['data' => $data]);
    }


    public function single($research_status, $slug)
    {
        $data = Research::where('slug', $slug)
                        ->where('research_status', $research_status)
                        ->first();

        if (!$data) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('research-single', ['data' => $data]);
    }

}