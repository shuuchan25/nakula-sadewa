<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\CulinaryMenu;
use App\Models\CulinaryMenuCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CulinaryMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $culinary = Culinary::where('slug', $slug)->first();

        $menuCategories = CulinaryMenuCategory::all();

        return view('admin.culinaries.menus.create', compact('culinary', 'menuCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $culinary = Culinary::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:culinary_menus',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'price' => 'required|int',
            'menu_category_id' => 'required',
            'description' => 'required',
        ]);

        $culinaryMenu = new CulinaryMenu();
        $culinaryMenu->name = $validatedData['name'];
        $culinaryMenu->slug = $validatedData['slug'];
        $culinaryMenu->culinary_id = $culinary->id ;
        $culinaryMenu->price = $validatedData['price'];
        $culinaryMenu->menu_category_id = $validatedData['menu_category_id'];
        $culinaryMenu->description = $validatedData['description'];

        $imagePath = $request->file('image')->store('images/menus', 'public');
        $culinaryMenu->image = $imagePath;

        $culinaryMenu->save();

        return redirect('/admin/culinaries/' . $culinary->slug)->with('success', 'Menu baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(CulinaryMenu $culinaryMenu)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, CulinaryMenu $culinaryMenu)
    {
        $culinary = Culinary::where('slug', $slug)->first();

        $menuCategories = CulinaryMenuCategory::all();

        return view('admin.culinaries.menus.edit', compact('culinary', 'culinaryMenu', 'menuCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug, Request $request, CulinaryMenu $culinaryMenu)
    {
        $culinary = Culinary::where('slug', $slug)->first();

        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'price' => 'required|int',
            'menu_category_id' => 'required',
            'description' => 'required',
        ];
        
        if ($request->slug != $culinaryMenu->slug) {
            $rules['slug'] = 'required|max:255|unique:culinary_menus';
        }
        
        $validatedData = $request->validate($rules);
        
        $culinaryMenu->name = $validatedData['name'];
        $culinaryMenu->culinary_id = $culinary->id ;
        $culinaryMenu->price = $validatedData['price'];
        $culinaryMenu->menu_category_id = $validatedData['menu_category_id'];
        $culinaryMenu->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($culinaryMenu->image);

            $imagePath = $request->file('image')->store('images/menus', 'public');
            $culinaryMenu->image = $imagePath;
        }

        $culinaryMenu->slug = $validatedData['slug'] ?? $culinaryMenu->slug;
        
        $culinaryMenu->save();

        return redirect('/admin/culinaries/' . $culinary->slug)->with('success', 'Menu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, CulinaryMenu $culinaryMenu)
    {
        $culinary = Culinary::where('slug', $slug)->first();

        Storage::disk('public')->delete($culinaryMenu->image);

        // Hapus data dari basis data
        $culinaryMenu->delete();

        return redirect('/admin/culinaries/' . $culinary->slug)->with('success', 'Menu berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(CulinaryMenu::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
