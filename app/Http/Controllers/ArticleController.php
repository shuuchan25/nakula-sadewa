<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Article::all();
        return view('admin.article', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        $validate['image'] = env('APP_URL') . '/storage/' . $request->file('image')->store('images/articles');

        if (Article::create($validate)) {
            return redirect()->back()->with('success', 'Article has been add');
        }

        return redirect()->back()->withErrors(['error' => 'Failed add data']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->delete()) {
            return redirect()->back();
        }

        return redirect()->back()->withErrors(['error' => 'Failed Delete data']);
    }
}
