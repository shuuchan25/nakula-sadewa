<?php

namespace App\Http\Controllers;

use App\Models\DesaWisataCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DesaWisataCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desaWisataCategories = DesaWisataCategory::all(); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.desa-wisata-categories.index', compact('desaWisataCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.desa-wisata-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:desa_wisata_categories'
        ]);

        // Simpan data baru ke basis data
        $desaWisataCategories = new DesaWisataCategory();
        $desaWisataCategories->name = $validatedData['name'];

        $desaWisataCategories->save();

        return redirect('/admin/kategori-desa-wisata')->with('success', 'kategori Desa Wisata baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesaWisataCategory $desaWisataCategory)
    {
        return view('admin.desa-wisata-categories.edit', compact('desaWisataCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesaWisataCategory $desaWisataCategory)
    {
        // Validasi data dari form
        $rules = [
            'name' => 'required|max:255'
        ];

        if( $request->slug != $desaWisataCategory->slug ) {
            $rules['slug'] = 'required|unique:desa_wisata_categories';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $desaWisataCategory->name = $validatedData['name'];

        $desaWisataCategory->save();

        return redirect('/admin/kategori-desa-wisata')->with('success', 'kategori Desa Wisata berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesaWisataCategory $desaWisataCategory)
    {
        // Hapus data dari basis data
        $desaWisataCategory->delete();

        return redirect('/admin/kategori-desa-wisata')->with('success', 'kategori Desa Wisata berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(DesaWisataCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
