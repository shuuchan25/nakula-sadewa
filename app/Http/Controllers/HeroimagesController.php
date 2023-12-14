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
        $heroimages = Heroimage::all();

        $request->validate([
            'image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $existingImagesCount = $heroimages->count();
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('image')) > $maxImages) {
                return redirect('/admin/gallery/')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('image') as $image) {
                $path = $image->store('images/heroimages', 'public'); // Simpan ke direktori 'heroimages' di storage/app/public
                Heroimage::create(['image' => $path]);
            }
        }

        return redirect('/admin/gallery')->with('success', 'Gambar baru berhasil ditambahkan.');
    }


    // Menghapus gambar dari heroimage
    public function destroy($id)
    {
        $heroimage = Heroimage::findOrFail($id);
        Storage::disk('public')->delete($heroimage->image);
        $heroimage->delete();

        return redirect('/admin/gallery')->with('success', 'Data Gambar berhasil dihapus.');
    }

}