<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use Illuminate\Support\Facades\Storage;

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

        return view('admin/guide', compact('guides', 'search'));
    }
    public function detail(Guide $guide)
    {
        return view('admin.detail-guide', compact('guide'));
    }


    public function create()
    {
        return view('admin/add-guide');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data baru ke basis data
        $guide = new Guide();
        $guide->title = $validatedData['title'];
        $guide->description = $validatedData['description'];

        $imagePath = $request->file('image')->store('images/guides', 'public');
        $guide->image = $imagePath;

        $guide->save();

        return redirect()->route('guide.index')->with('success', 'Data berhasil dibuat!');
    }

    public function edit(Guide $guide)
    {
        return view('admin/edit-guide', compact('guide'));
    }

    public function update(Request $request, Guide $guide)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Update data di basis data
        $guide->title = $validatedData['title'];
        $guide->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($guide->image);
            $imagePath = $request->file('image')->store('images/guides', 'public');
            $guide->image = $imagePath;
        }

        $guide->save();

        return redirect()->route('guide.index')->with('success', ' berhasil diperbarui!');
    }

    public function destroy(Guide $guide)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($guide->image);

        // Hapus data dari basis data
        $guide->delete();

        return redirect()->route('guide.index')->with('success', ' berhasil dihapus!');
    }
}