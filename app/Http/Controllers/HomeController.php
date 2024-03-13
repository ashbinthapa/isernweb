<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page; // Import the Page model

use App\Models\Post; // Import the Post model


class HomeController extends Controller
{
    public function index()
    {
        $posts_all = Post::all();

        $posts_latest_news = Post::latest()->take(3)->get(); // Retrieve latest 3 posts from the database

        $page_about_us = Page::where('slug', 'about-us')->first(); // Retrieve all pages from the database

        $data = [
            'posts_all' => $posts_all,
            'posts_latest_news' => $posts_latest_news,
            'page_about_us' => $page_about_us,
        ];
        
        return view('index', ['data' => $data]);
    }
    public function sliderPost()
    {
        $posts = Post::latest()->take(10)->get(); // Retrieve latest 3 posts from the database
        return view('index', ['posts' => $posts]);
    }

}
