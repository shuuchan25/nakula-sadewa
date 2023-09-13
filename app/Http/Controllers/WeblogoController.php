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
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('images/weblogos', 'public'); // Simpan ke direktori 'weblogos' di storage/app/public
                Weblogo::create(['image' => $path]);
            }
        }

        return redirect('/admin/weblogo')->with('success', 'Logo berhasil ditambahkan');
    }


    // Menghapus gambar dari heroimage
    public function destroy($id)
    {
        $heroimage = Weblogo::findOrFail($id);
        Storage::delete($heroimage->image);
        $heroimage->delete();

        return redirect('/admin/weblogo')->with('success', 'Logo berhasil dihapus');
    }
}