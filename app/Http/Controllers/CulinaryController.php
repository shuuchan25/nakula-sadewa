<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\CulinaryCategory;
use App\Models\CulinaryImage;
use App\Models\CulinaryMenu;
use App\Models\CulinaryMenuCategory;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = Culinary::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $culinaries = $query->paginate(10);

        $categories = CulinaryCategory::all();

        return view('admin.culinaries.index', compact('culinaries', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Culinary $culinary, Request $request)
    {
        $search = $request->input('search');
        $menu_category_id = $request->input('menu_category_id');
        $query = CulinaryMenu::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($menu_category_id) {
            $query->where('menu_category_id', $menu_category_id);
        }

        $culinary->load('images');
        
        $culinaryMenus = $culinary->menus;

        $culinaryMenus = $query->paginate(10);

        $menuCategories = CulinaryMenuCategory::all();

        $categories = CulinaryCategory::all();

        return view('admin.culinaries.detail', compact('culinary', 'categories', 'culinaryMenus', 'menuCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CulinaryCategory::all();

        return view('admin.culinaries.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:attractions',
            'category_id' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'map' => 'required|max:255',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif',
            'other_image' => 'max:6',
        ]);

        $culinary = new Culinary();
        $culinary->name = $validatedData['name'];
        $culinary->slug = $validatedData['slug'];
        $culinary->category_id = $validatedData['category_id'];
        $culinary->address = $validatedData['address'];
        $culinary->description = $validatedData['description'];
        $culinary->operational_hour = $validatedData['operational_hour'];
        $culinary->contact = $validatedData['contact'];
        $culinary->map = $validatedData['map'];

        $imagePath = $request->file('image')->store('images/culinaries', 'public');
        $culinary->image = $imagePath;

        $culinary->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    // $fileMimeType = $otherImageFile->getMimeType();
                    // dd($fileMimeType);
                    $imagePath = $otherImageFile->store('images/culinaries', 'public');
                    $culinaryImage = new CulinaryImage(['other_image' => $imagePath]);
                    $culinary->images()->save($culinaryImage);
                }
            }
        }

        return redirect('/admin/culinaries/' . $culinary->slug)->with('success', 'Item baru berhasil dibuat!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Culinary $culinary)
    {
        $categories = CulinaryCategory::all();

        $other_images = $culinary->images;

        return view('admin.culinaries.edit', compact('culinary', 'categories', 'other_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Culinary $culinary)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'map' => 'required|max:255',
        ];

        if ($request->slug != $culinary->slug) {
            $rules['slug'] = 'required|max:255|unique:culinaries';
        }

        $validatedData = $request->validate($rules);

        $culinary->name = $validatedData['name'];
        $culinary->category_id = $validatedData['category_id'];
        $culinary->address = $validatedData['address'];
        $culinary->description = $validatedData['description'];
        $culinary->operational_hour = $validatedData['operational_hour'];
        $culinary->contact = $validatedData['contact'];
        $culinary->map = $validatedData['map'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($culinary->image);

            $imagePath = $request->file('image')->store('images/culinaries', 'public');
            $culinary->image = $imagePath;
        }

        $culinary->slug = $validatedData['slug'] ?? $culinary->slug;

        $culinary->save();

        return redirect('/admin/culinaries/' . $culinary->slug)->with('success', 'Item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Culinary $culinary)
    {
        Storage::disk('public')->delete($culinary->image);

        foreach($culinary->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        $culinary->menus->each(function ($menu) {
            // Delete all related room images
            Storage::disk('public')->delete($menu->image);

            // Delete the room itself
            $menu->delete();
        });

        // Hapus data dari basis data
        $culinary->delete();

        return redirect('/admin/culinaries')->with('success', 'Item berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Culinary::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}