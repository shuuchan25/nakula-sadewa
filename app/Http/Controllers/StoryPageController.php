<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryPageController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     // $selectedMonth = $request->input('selectedMonth');

    //     $query = Article::query();

    //     if ($search) {
    //         $query->where('title', 'LIKE', '%' . $search . '%');
    //     }

    //     // if ($selectedMonth) {
    //     //     $query->whereMonth('date', $selectedMonth);
    //     // }

    //     $stories = $query->orderBy('created_at', 'desc')->paginate(24);

    //     return view('stories.index', compact('stories', 'search'));
    // }

    public function show(Story $story)
    {
        // $article->load('images');

        return view('stories.detail', compact('story'));
    }
}