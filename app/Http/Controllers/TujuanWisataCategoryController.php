<?php

namespace App\Http\Controllers;

use App\Models\TujuanWisataCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TujuanWisataCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tujuanWisataCategories = TujuanWisataCategory::all(); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.tujuan-wisata-categories.index', compact('tujuanWisataCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tujuan-wisata-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:tujuan_wisata_categories'
        ]);

        // Simpan data baru ke basis data
        $tujuanWisataCategories = new TujuanWisataCategory();
        $tujuanWisataCategories->name = $validatedData['name'];

        $tujuanWisataCategories->save();

        return redirect('/admin/kategori-tujuan-wisata')->with('success', 'kategori Destinasi Wisata baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TujuanWisataCategory $tujuanWisataCategory)
    {
        return view('admin.tujuan-wisata-categories.edit', compact('tujuanWisataCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TujuanWisataCategory $tujuanWisataCategory)
    {
        // Validasi data dari form
        $rules = [
            'name' => 'required|max:255'
        ];

        if( $request->slug != $tujuanWisataCategory->slug ) {
            $rules['slug'] = 'required|unique:tujuan_wisata_categories';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $tujuanWisataCategory->name = $validatedData['name'];

        $tujuanWisataCategory->save();

        return redirect('/admin/kategori-tujuan-wisata')->with('success', 'kategori Destinasi Wisata berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TujuanWisataCategory $tujuanWisataCategory)
    {
        // Hapus data dari basis data
        $tujuanWisataCategory->delete();

        return redirect('/admin/kategori-tujuan-wisata')->with('success', 'kategori Destinasi Wisata berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(TujuanWisataCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
