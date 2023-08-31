<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin/article', compact('articles'));
    }

    public function create()
    {
        return view('admin/add-article');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data baru ke basis data
        $article = new Article();
        $article->title = $validatedData['title'];
        $article->author = $validatedData['author'];
        $article->content = $validatedData['content'];

        $imagePath = $request->file('image')->store('images/articles', 'public');
        $article->image = $imagePath;

        $article->save();

        return redirect()->route('article.index')->with('success', 'Article created successfully!');
    }

    public function edit(Article $article)
    {
        // $articles = Article::all();
        return view('admin/edit-article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Update data di basis data
        $article->title = $validatedData['title'];
        $article->author = $validatedData['author'];
        $article->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);
            $imagePath = $request->file('image')->store('images/articles', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect()->route('article.index')->with('success', 'Article updated successfully!');
    }

    public function destroy(Article $article)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($article->image);

        // Hapus data dari basis data
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article deleted successfully!');
    }
}