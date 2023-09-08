<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Article::query();

        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('author', 'LIKE', '%' . $search . '%');
        }

        $articles = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.articles.index', compact('articles', 'search'));
    }



    public function show(Article $article)
    {
        return view('admin.articles.detail', compact('article'));
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles',
            'author' => 'required|max:255',
            'content' => 'required',
            'published_at' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data baru ke basis data
        $article = new Article();
        $article->title = $validatedData['title'];
        $article->author = $validatedData['author'];
        $article->content = $validatedData['content'];
        $article->published_at = $validatedData['published_at'];

        $imagePath = $request->file('image')->store('images/articles', 'public');
        $article->image = $imagePath;

        $article->save();

        return redirect('/admin/articles')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi data dari form
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'published_at' => 'required',
            'image' => 'nullable|image|max:5120|mimes:jpeg,png,jpg,gif',
        ];

        if( $request->slug != $article->slug ) {
            $rules['slug'] = 'required|unique:articles';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $article->title = $validatedData['title'];
        $article->author = $validatedData['author'];
        $article->content = $validatedData['content'];
        $article->published_at = $validatedData['published_at'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);
            $imagePath = $request->file('image')->store('images/articles', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect('/admin/articles')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($article->image);

        // Hapus data dari basis data
        $article->delete();

        return redirect('/admin/articles')->with('success', 'Artikel berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}