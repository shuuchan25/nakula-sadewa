<?php

namespace App\Http\Controllers;

use App\Models\Heroimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroimagesController extends Controller
{
    public function index()
    {
        $heroimages = Heroimage::all();
        return view('admin.gallery', compact('heroimages'));
    }


    // Menambahkan gambar baru ke heroimage
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('images/heroimages', 'public'); // Simpan ke direktori 'heroimages' di storage/app/public
                Heroimage::create(['image' => $path]);
            }
        }

        return redirect('/admin/gallery')->with('success', 'Galeri berhasil ditambahkan');
    }


    // Menghapus gambar dari heroimage
    public function destroy($id)
    {
        $heroimage = Heroimage::findOrFail($id);
        Storage::delete($heroimage->image);
        $heroimage->delete();

        return redirect('/admin/gallery')->with('success', 'Gambar galeri berhasil dihapus');
    }

}