<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\Storage;

class StoriesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Story::query();

        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('author', 'LIKE', '%' . $search . '%');
        }

        $stories = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin/story', compact('stories', 'search'));
    }

    public function detail(Story $story)
    {
        return view('admin.detail-story', compact('story'));
    }


    public function create()
    {
        return view('admin/add-story');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',

            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data baru ke basis data
        $story = new Story();
        $story->title = $validatedData['title'];
        $story->author = $validatedData['author'];
        $story->content = $validatedData['content'];

        $imagePath = $request->file('image')->store('images/stories', 'public');
        $story->image = $imagePath;

        $story->save();

        return redirect()->route('story.index')->with('success', 'Cerita Wisatawan berhasil dibuat!');
    }

    public function edit(Story $story)
    {
        return view('admin/edit-story', compact('story'));
    }

    public function update(Request $request, Story $story)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Update data di basis data
        $story->title = $validatedData['title'];
        $story->author = $validatedData['author'];
        $story->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($story->image);
            $imagePath = $request->file('image')->store('images/stories', 'public');
            $story->image = $imagePath;
        }

        $story->save();

        return redirect()->route('story.index')->with('success', 'Cerita Wisatawan berhasil diperbarui!');
    }

    public function destroy(Story $story)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($story->image);

        // Hapus data dari basis data
        $story->delete();

        return redirect()->route('story.index')->with('success', 'Cerita Wisatawan berhasil dihapus!');
    }
}
