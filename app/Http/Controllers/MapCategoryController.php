<?php

namespace App\Http\Controllers;

use App\Models\MapCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MapCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = MapCategory::query();
        $mapCategories = $query->paginate(12);

        return view('admin.map-categories.index', compact('mapCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.map-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:map_categories,slug', // Perbarui dengan nama tabel yang benar
            'image' => 'required|image|max:5120|mimes:jpeg,png,jpg,gif,webp,svg,webp',
        ]);

        $mapCategory = new MapCategory();
        $mapCategory->name = $validatedData['name'];

        $imagePath = $request->file('image')->store('images/map-categories', 'public');
        $mapCategory->image = $imagePath;

        $mapCategory->save();

        return redirect('/admin/map-categories')->with('success', 'Kategori tempat baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MapCategory $mapCategory)
    {
        return view('admin.map-categories.edit', compact('mapCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MapCategory $mapCategory)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp,svg,webp',
        ];

        if ($request->slug != $mapCategory->slug) {
            $rules['slug'] = 'required|unique:map_categories';
        }

        $validatedData = $request->validate($rules);

        $mapCategory->name = $validatedData['name'];

        if ($request->hasFile('image')) {
            if ($mapCategory->image && Storage::disk('public')->exists($mapCategory->image)) {
                Storage::disk('public')->delete($mapCategory->image);
            }

            $imagePath = $request->file('image')->store('images/map-categories', 'public');
            $mapCategory->image = $imagePath;
        }

        $mapCategory->slug = $validatedData['slug'] ?? $mapCategory->slug;

        $mapCategory->save();

        return redirect('/admin/map-categories')->with('success', 'kategori tempat berhasil diperbarui.');
    }

    public function destroy(MapCategory $mapCategory)
    {
        if ($mapCategory->image && Storage::disk('public')->exists($mapCategory->image)) {
            Storage::disk('public')->delete($mapCategory->image);
        }

        $mapCategory->delete();

        return redirect('/admin/map-categories')->with('success', 'kategori tempat berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(MapCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}