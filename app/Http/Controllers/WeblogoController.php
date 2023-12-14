<?php

namespace App\Http\Controllers;

use App\Models\Weblogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeblogoController extends Controller
{
    public function index()
    {
        $weblogos = Weblogo::all();
        return view('admin.weblogo', compact('weblogos'));
    }

    // Menambahkan gambar baru ke heroimage
    public function store(Request $request)
    {
        $weblogos = Weblogo::all();

        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $existingImagesCount = $weblogos->count();
            $maxImages = 8;

            if ($existingImagesCount + count($request->file('image')) > $maxImages) {
                return redirect('/admin/weblogos/')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('image') as $image) {
                $path = $image->store('images/weblogos', 'public'); // Simpan ke direktori 'weblogos' di storage/app/public
                Weblogo::create(['image' => $path]);
            }
        }

        return redirect('/admin/weblogo')->with('success', 'Logo berhasil ditambahkan.');
    }


    // Menghapus gambar dari heroimage
    public function destroy($id)
    {
        $heroimage = Weblogo::findOrFail($id);
        Storage::delete($heroimage->image);
        $heroimage->delete();

        return redirect('/admin/weblogo')->with('success', 'Logo berhasil dihapus.');
    }
}