<?php

namespace App\Http\Controllers;

use App\Models\Publication; // Import the Publication model

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function archive()
    {
        $publications = Publication::all(); // Retrieve all posts from the database
        return view('publication', ['publications' => $publications]);
    }
}
