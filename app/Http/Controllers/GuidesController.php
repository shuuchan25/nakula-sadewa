<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GuidesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Guide::query();

        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
                // ->orWhere('author', 'LIKE', '%' . $search . '%');
        }

        $guides = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.guides.index', compact('guides', 'search'));
    }
    public function show(Guide $guide)
    {
        return view('admin.guides.detail', compact('guide'));
    }


    public function create()
    {
        return view('admin.guides.create');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:guides',
            'description' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
        ]);

        // Simpan data baru ke basis data
        $guide = new Guide();
        $guide->title = $validatedData['title'];
        $guide->slug = $validatedData['slug'];
        $guide->description = $validatedData['description'];

        $imagePath = $request->file('image')->store('images/guides', 'public');
        $guide->image = $imagePath;

        $guide->save();

        return redirect('/admin/guides')->with('success', 'Data travel pattern berhasil dibuat!');
    }

    public function edit(Guide $guide)
    {
        return view('admin.guides.edit', compact('guide'));
    }

    public function update(Request $request, Guide $guide)
    {
        // Validasi data dari form
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ];

        if( $request->slug != $guide->slug ) {
            $rules['slug'] = 'required|unique:guides';
        }

        $validatedData = $request->validate($rules);


        // Update data di basis data
        $guide->title = $validatedData['title'];
        $guide->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($guide->image);
            $imagePath = $request->file('image')->store('images/guides', 'public');
            $guide->image = $imagePath;
        }

        $guide->save();

        return redirect('/admin/guides')->with('success', 'Data travel pattern berhasil diperbarui!');
    }

    public function destroy(Guide $guide)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($guide->image);

        // Hapus data dari basis data
        $guide->delete();

        return redirect('/admin/guides')->with('success', 'Data travel pattern berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Guide::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}