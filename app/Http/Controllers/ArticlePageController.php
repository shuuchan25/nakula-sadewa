<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlePageController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    // $selectedMonth = $request->input('selectedMonth');

    $query = Article::query();

    if ($search) {
        $query->where('title', 'LIKE', '%' . $search . '%');
    }

    // if ($selectedMonth) {
    //     $query->whereMonth('date', $selectedMonth);
    // }

    $articles = $query->orderBy('created_at', 'desc')->paginate(24);

    return view('articles.index', compact('articles', 'search'));
}


    public function show(Article $article)
    {

        // $article->load('images');


        return view('articles.detail', compact('article'));
    }
}