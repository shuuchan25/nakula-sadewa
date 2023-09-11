<?php

namespace App\Http\Controllers;

use App\Models\TujuanWisataCategory;
use App\Models\TujuanWisataImage;
use App\Models\TujuanWisataItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TujuanWisataItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = TujuanWisataItem::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $tujuanWisataItems = $query->paginate(10);

        $categories = TujuanWisataCategory::all();

        return view('admin.tujuan-wisata.index', compact('tujuanWisataItems', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(TujuanWisataItem $tujuanWisataItem)
    {

        $tujuanWisataItem->load('images');

        $categories = TujuanWisataCategory::all();

        return view('admin.tujuan-wisata.detail', compact('tujuanWisataItem', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = TujuanWisataCategory::all();

        return view('admin.tujuan-wisata.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:tujuan_wisata_items',
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

        $tujuanWisataItem = new TujuanWisataItem();
        $tujuanWisataItem->name = $validatedData['name'];
        $tujuanWisataItem->slug = $validatedData['slug'];
        $tujuanWisataItem->category_id = $validatedData['category_id'];
        $tujuanWisataItem->address = $validatedData['address'];
        $tujuanWisataItem->description = $validatedData['description'];
        $tujuanWisataItem->operational_hour = $validatedData['operational_hour'];
        $tujuanWisataItem->contact = $validatedData['contact'];
        $tujuanWisataItem->price = $validatedData['price'];
        $tujuanWisataItem->map = $validatedData['map'];
        $tujuanWisataItem->video = $validatedData['video'];

        $imagePath = $request->file('image')->store('images/tujuan-wisata', 'public');
        $tujuanWisataItem->image = $imagePath;

        $tujuanWisataItem->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    // $fileMimeType = $otherImageFile->getMimeType();
                    // dd($fileMimeType);
                    $imagePath = $otherImageFile->store('images/tujuan-wisata', 'public');
                    $tujuanWisataImage = new TujuanWisataImage(['other_image' => $imagePath]);
                    $tujuanWisataItem->images()->save($tujuanWisataImage);
                }
            }
        }

        return redirect('/admin/tujuan-wisata')->with('success', 'Destinasi Wisata baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TujuanWisataItem $tujuanWisataItem)
    {
        $categories = TujuanWisataCategory::all();

        return view('admin.tujuan-wisata.edit', compact('tujuanWisataItem', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TujuanWisataItem $tujuanWisataItem)
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
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif',
            'other_image' => 'max:6',
        ];
        
        if ($request->slug != $tujuanWisataItem->slug) {
            $rules['slug'] = 'required|max:255|unique:tujuan_wisata_items';
        }
        
        $validatedData = $request->validate($rules);
        
        $tujuanWisataItem->name = $validatedData['name'];
        $tujuanWisataItem->category_id = $validatedData['category_id'];
        $tujuanWisataItem->address = $validatedData['address'];
        $tujuanWisataItem->description = $validatedData['description'];
        $tujuanWisataItem->operational_hour = $validatedData['operational_hour'];
        $tujuanWisataItem->contact = $validatedData['contact'];
        $tujuanWisataItem->price = $validatedData['price'];
        $tujuanWisataItem->map = $validatedData['map'];
        $tujuanWisataItem->video = $validatedData['video'];
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($tujuanWisataItem->image);
        
            $imagePath = $request->file('image')->store('images/tujuan-wisata', 'public');
            $tujuanWisataItem->image = $imagePath;
        }

        if ($request->hasFile('other_image')) {
            foreach ($tujuanWisataItem->images as $image) {
                Storage::disk('public')->delete($image->other_image);
            }

            foreach ($request->file('other_image') as $index => $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/tujuan-wisata', 'public');
                    $imageIdToUpdate = $tujuanWisataItem->images[$index]->id;
                    $existingImage = $tujuanWisataItem->images->find($imageIdToUpdate);
                    if ($existingImage) {
                        $existingImage->update(['other_image' => $imagePath]);
                    }
                }
            }
        }

        $tujuanWisataItem->slug = $validatedData['slug'] ?? $tujuanWisataItem->slug;
        
        $tujuanWisataItem->save();

        return redirect('/admin/tujuan-wisata')->with('success', 'Destinasi Wisata berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TujuanWisataItem $tujuanWisataItem)
    {

        Storage::disk('public')->delete($tujuanWisataItem->image);
        
        foreach($tujuanWisataItem->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        // Hapus data dari basis data
        $tujuanWisataItem->delete();

        return redirect('/admin/tujuan-wisata')->with('success', 'Destinasi Wisata berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(TujuanWisataItem::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
