<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page; // Import the Page model

use App\Models\Post; // Import the Post model

use App\Models\Timeline; // Import the Timeline model

use App\Models\Publication; // Import the Timeline model

use App\Models\Research; // Import the Research model

use App\Models\PublicationCategory; // Import the PublicationCategory model




class HomeController extends Controller
{
    public function index()
    {
        $posts_all = Post::all();

        $posts_latest_news = Post::latest()->take(3)->get(); // Retrieve latest 3 posts from the database

        $page_about_us = Page::where('slug', 'about-us')->first(); // Retrieve about-us pages from the database

        $timeline_slider = Timeline::latest()->get();

        $publications = Publication::latest()->take(8)->get(); // Retrieve all publication from the database

        $publicationsCategory = PublicationCategory::get(); // Retrieve all publicationCategoty from the database

        $latest_research = Research::latest()->take(4)->get(); // Retrieve latest 3 posts from the database


        $data = [
            'posts_all' => $posts_all,
            'posts_latest_news' => $posts_latest_news,
            'page_about_us' => $page_about_us,
            'timeline_slider' => $timeline_slider,
            'publications_data' => $publications,
            'latest_research' => $latest_research,
            'publicationsCategory' => $publicationsCategory,
        ];
        
        return view('index', ['data' => $data]);
    }

    /*
    public function sliderPost()
    {
        $posts = Post::latest()->take(10)->get(); // Retrieve latest 3 posts from the database
        return view('index', ['posts' => $posts]);
    }
    */
}
