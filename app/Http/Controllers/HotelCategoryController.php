<?php

namespace App\Http\Controllers;

use App\Models\HotelCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class HotelCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotelCategories = HotelCategory::all();

        return view('admin.hotel-categories.index', compact('hotelCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hotel-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:hotel_categories'
        ]);

        // Simpan data baru ke basis data
        $hotelCategories = new HotelCategory();
        $hotelCategories->name = $validatedData['name'];

        $hotelCategories->save();

        return redirect('/admin/kategori-hotel')->with('success', 'Kategori akomodasi baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelCategory $hotelCategory)
    {
        return view('admin.hotel-categories.edit', compact('hotelCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelCategory $hotelCategory)
    {
        // Validasi data dari form
        $rules = [
            'name' => 'required|max:255'
        ];

        if( $request->slug != $hotelCategory->slug ) {
            $rules['slug'] = 'required|unique:hotel_categories';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $hotelCategory->name = $validatedData['name'];

        $hotelCategory->save();

        return redirect('/admin/kategori-hotel')->with('success', 'Kategori akomodasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelCategory $hotelCategory)
    {
        // Hapus data dari basis data
        $hotelCategory->delete();

        return redirect('/admin/kategori-hotel')->with('success', 'Kategori akomodasi berhasil dihapus.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(HotelCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}