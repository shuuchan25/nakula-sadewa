<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Heroimage;
use App\Models\Review;
use App\Models\Story;
use App\Models\Webprofile;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $galleries = Heroimage::all();
        $webprofile = Webprofile::first();
        $events = Event::all();
        $articles = Article::all(); 
        $stories = Story::all();
        $reviews = Review::all();

        return view('welcome', compact('galleries', 'webprofile', 'stories', 'events', 'articles', 'reviews'));
    }
}
