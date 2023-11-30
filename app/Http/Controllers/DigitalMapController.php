<?php

namespace App\Http\Controllers;

use App\Models\DigitalMap;
use App\Models\MapCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DigitalMapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = DigitalMap::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $maps = $query->paginate(10);

        $categories = MapCategory::all();

        return view('admin.maps.index', compact('maps', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function mapIndex(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = DigitalMap::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->whereHas('category', function ($q) use ($category_id) {
                $q->where('id', $category_id);
            });
        }

        $maps = $query->paginate(100);

        $categories = MapCategory::all();

        if (is_null($maps) || is_null($categories)) {
            // Handle jika data null
            // Misalnya, kembalikan response atau tampilkan pesan kesalahan
        } else {
            return view('admin.maps.detail', compact('maps', 'search', 'categories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = MapCategory::all();

        return view('admin.maps.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:digital_maps',
            'category_id' => 'required',
            'coordinate_x' => 'required|max:255',
            'coordinate_y' => 'required|max:255',
        ]);

        $map = new DigitalMap();
        $map->name = $validatedData['name'];
        $map->slug = $validatedData['slug'];
        $map->category_id = $validatedData['category_id'];
        $map->coordinate_x = $validatedData['coordinate_x'];
        $map->coordinate_y = $validatedData['coordinate_y'];

        $map->save();

        return redirect('/admin/maps')->with('success', 'Place marker baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DigitalMap $map)
    {
        $categories = MapCategory::all();

        return view('admin.maps.edit', compact('map', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DigitalMap $map)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'coordinate_x' => 'required|max:255',
            'coordinate_y' => 'required|max:255',
        ];

        if ($request->slug != $map->slug) {
            $rules['slug'] = 'required|max:255|unique:maps';
        }

        $validatedData = $request->validate($rules);

        $map->name = $validatedData['name'];
        $map->category_id = $validatedData['category_id'];
        $map->coordinate_x = $validatedData['coordinate_x'];
        $map->coordinate_y = $validatedData['coordinate_y'];

        $map->slug = $validatedData['slug'] ?? $map->slug;

        $map->save();

        return redirect('/admin/maps/')->with('success', 'Place Marker berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DigitalMap $map)
    {
        // Hapus data dari basis data
        $map->delete();

        return redirect('/admin/maps')->with('success', 'Place marker berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(DigitalMap::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}