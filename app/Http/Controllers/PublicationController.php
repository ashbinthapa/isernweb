<?php

namespace App\Http\Controllers;

use App\Models\Publication; // Import the Publication model

use App\Models\PublicationCategory; // Import the PublicationCategory model

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function archive(Request $request)
    {
        // Retrieve filters and sorting from the request
        $type = $request->input('type', 'all');
        $year = $request->input('year', 'all');
        $sortBy = $request->input('sortBy', 'id'); // Default sort by 'id'
        $sortOrder = $request->input('sortOrder', 'asc'); // Default sort order 'asc'

        // Start with a base query
        $query = Publication::query();

        // Apply type filter
        if ($type != 'all') {
            $query->where('publicationcategory_id', $type);
        }

        // Apply year filter
        if ($year !== 'all') {
            $query->where('year', $year);
        }

        // Apply sorting
        $query->orderBy($sortBy, $sortOrder);

        // Paginate the results
        $publications = $query->paginate(10);

        // Get all publication categories
        $publicationsCategory = PublicationCategory::all();

        // Get unique years
        $uniqueYears = Publication::select('year')->distinct()->orderBy('year', 'desc')->get();

        // Pass data to the view
        $publications_data = [
            'publications' => $publications,
            'publicationsCategory' => $publicationsCategory,
            'uniqueYears' => $uniqueYears,
        ];

        return view('publication', [
            'publications_data' => $publications_data, 
            'type' => $type, 
            'year' => $year, 
            'sortBy' => $sortBy, 
            'sortOrder' => $sortOrder
        ]);
    }


}
