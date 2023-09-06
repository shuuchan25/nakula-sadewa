<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

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

        return view('admin/article', compact('articles', 'search'));
    }



    public function detail(Article $article)
    {
        return view('admin.detail-article', compact('article'));
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
            'published_at' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp',
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

        return redirect()->route('article.index')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Article $article)
    {
        return view('admin/edit-article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'published_at' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

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

        return redirect()->route('article.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($article->image);

        // Hapus data dari basis data
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Artikel berhasil dihapus!');
    }
}