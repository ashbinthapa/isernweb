<?php

namespace App\Http\Controllers;

use App\Models\Publication; // Import the Publication model

use App\Models\PublicationCategory; // Import the PublicationCategory model

use Illuminate\Http\Request;

class PublicationController extends Controller
{
     public function archive(Request $request)
    {
        $type = $request->input('type', 'all');
        $year = $request->input('year', 'all');

        $publicationsCategory = PublicationCategory::all();

        $query = Publication::query();

        if ($type !== 'all') {
            $query->where('publicationcategory_id', $type);
        }

        if ($year !== 'all') {
            $query->where('year', $year);
        }

        $publications = $query->paginate(10);

        // Get unique years from the publications
        $uniqueYears = Publication::select('year')->distinct()->orderBy('year', 'desc')->get();

        $publications_data = [
            'publications' => $publications,
            'publicationsCategory' => $publicationsCategory,
            'uniqueYears' => $uniqueYears,
        ];

        return view('publication', ['publications_data' => $publications_data]);
    }

}
