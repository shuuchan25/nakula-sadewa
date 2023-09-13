<?php

namespace App\Http\Controllers;

use App\Models\DesaWisataCategory;
use App\Models\DesaWisataImage;
use App\Models\DesaWisataItem;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesaWisataItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = DesaWisataItem::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $desaWisataItems = $query->paginate(10);

        $categories = DesaWisataCategory::all();

        return view('admin.desa-wisata.index', compact('desaWisataItems', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(DesaWisataItem $desaWisataItem)
    {

        $desaWisataItem->load('images');

        $categories = DesaWisataCategory::all();

        return view('admin.desa-wisata.detail', compact('desaWisataItem', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DesaWisataCategory::all();

        return view('admin.desa-wisata.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:desa_wisata_items',
            'category_id' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'price' => 'required|int',
            'map' => 'required|max:255',
            'video' => 'required|max:255',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif',
            'other_image' => 'max:6',
        ]);

        $desaWisataItem = new DesaWisataItem();
        $desaWisataItem->name = $validatedData['name'];
        $desaWisataItem->slug = $validatedData['slug'];
        $desaWisataItem->category_id = $validatedData['category_id'];
        $desaWisataItem->address = $validatedData['address'];
        $desaWisataItem->description = $validatedData['description'];
        $desaWisataItem->operational_hour = $validatedData['operational_hour'];
        $desaWisataItem->contact = $validatedData['contact'];
        $desaWisataItem->price = $validatedData['price'];
        $desaWisataItem->map = $validatedData['map'];
        $desaWisataItem->video = $validatedData['video'];

        $imagePath = $request->file('image')->store('images/desa-wisata', 'public');
        $desaWisataItem->image = $imagePath;

        $desaWisataItem->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    // $fileMimeType = $otherImageFile->getMimeType();
                    // dd($fileMimeType);
                    $imagePath = $otherImageFile->store('images/desa-wisata', 'public');
                    $desaWisataImage = new DesaWisataImage(['other_image' => $imagePath]);
                    $desaWisataItem->images()->save($desaWisataImage);
                }
            }
        }

        return redirect('/admin/desa-wisata')->with('success', 'Desa Wisata baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesaWisataItem $desaWisataItem)
    {
        $categories = DesaWisataCategory::all();

        $other_images = $desaWisataItem->images; 

        return view('admin.desa-wisata.edit', compact('desaWisataItem', 'categories', 'other_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesaWisataItem $desaWisataItem)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'price' => 'required|integer',
            'map' => 'required|max:255',
            'video' => 'required|max:255',
        ];
        
        if ($request->slug != $desaWisataItem->slug) {
            $rules['slug'] = 'required|max:255|unique:desa_wisata_items';
        }
        
        $validatedData = $request->validate($rules);
        
        $desaWisataItem->name = $validatedData['name'];
        $desaWisataItem->category_id = $validatedData['category_id'];
        $desaWisataItem->address = $validatedData['address'];
        $desaWisataItem->description = $validatedData['description'];
        $desaWisataItem->operational_hour = $validatedData['operational_hour'];
        $desaWisataItem->contact = $validatedData['contact'];
        $desaWisataItem->price = $validatedData['price'];
        $desaWisataItem->map = $validatedData['map'];
        $desaWisataItem->video = $validatedData['video'];
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($desaWisataItem->image);
        
            $imagePath = $request->file('image')->store('images/desa-wisata', 'public');
            $desaWisataItem->image = $imagePath;
        }

        $desaWisataItem->slug = $validatedData['slug'] ?? $desaWisataItem->slug;
        
        $desaWisataItem->save();

        return redirect('/admin/desa-wisata/' . $desaWisataItem->slug)->with('success', 'Desa Wisata berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesaWisataItem $desaWisataItem)
    {
        Storage::disk('public')->delete($desaWisataItem->image);
        
        foreach($desaWisataItem->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        // Hapus data dari basis data
        $desaWisataItem->delete();

        return redirect('/admin/desa-wisata')->with('success', 'Desa Wisata berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(DesaWisataItem::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
