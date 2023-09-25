<?php

namespace App\Http\Controllers;

use App\Models\AttractionCategory;
use App\Models\AttractionSubCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AttractionSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attractionSubCategories = AttractionSubCategory::all(); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.attraction-sub-categories.index', compact('attractionSubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = AttractionCategory::all();

        return view('admin.attraction-sub-categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:attraction_sub_categories',
            'category_id' => 'required',
        ]);

        // Simpan data baru ke basis data
        $attractionSubCategories = new AttractionSubCategory();
        $attractionSubCategories->name = $validatedData['name'];
        $attractionSubCategories->slug = $validatedData['slug'];
        $attractionSubCategories->category_id = $validatedData['category_id'];

        $attractionSubCategories->save();

        return redirect('/admin/attraction-sub-categories')->with('success', 'Sub kategori item baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttractionSubCategory $attractionSubCategory)
    {
        $categories = AttractionCategory::all();

        return view('admin.attraction-sub-categories.edit', compact('attractionSubCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttractionSubCategory $attractionSubCategory)
    {
        // Validasi data dari form
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
        ];

        if( $request->slug != $attractionSubCategory->slug ) {
            $rules['slug'] = 'required|unique:attraction_sub_categories';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $attractionSubCategory->name = $validatedData['name'];
        $attractionSubCategory->category_id = $validatedData['category_id'];

        $attractionSubCategory->slug = $validatedData['slug'] ?? $attractionSubCategory->slug;

        $attractionSubCategory->save();

        return redirect('/admin/attraction-sub-categories')->with('success', 'Sub kategori item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttractionSubCategory $attractionSubCategory)
    {
        // Hapus data dari basis data
        $attractionSubCategory->delete();

        return redirect('/admin/attraction-sub-categories')->with('success', 'Sub kategori item berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(AttractionSubCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
