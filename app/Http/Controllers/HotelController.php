<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelCategory;
use App\Models\HotelImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = Hotel::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $hotels = $query->paginate(10);

        $categories = HotelCategory::all();

        return view('admin.hotels.index', compact('hotels', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {

        $hotel->load('images');

        $categories = HotelCategory::all();

        return view('admin.hotels.detail', compact('hotel', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = HotelCategory::all();

        return view('admin.hotels.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:hotels',
            'category_id' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            // 'facilities' => 'nullable',
            'contact' => 'required|max:255',
            'map' => 'required|max:255',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif',
            'other_image' => 'max:6',
        ]);

        $hotel = new Hotel();
        $hotel->name = $validatedData['name'];
        $hotel->slug = $validatedData['slug'];
        $hotel->category_id = $validatedData['category_id'];
        $hotel->address = $validatedData['address'];
        $hotel->description = $validatedData['description'];
        // $hotel->facilities = $validatedData['facilities'];
        $hotel->contact = $validatedData['contact'];
        $hotel->map = $validatedData['map'];

        $imagePath = $request->file('image')->store('images/hotels', 'public');
        $hotel->image = $imagePath;

        $hotel->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    // $fileMimeType = $otherImageFile->getMimeType();
                    // dd($fileMimeType);
                    $imagePath = $otherImageFile->store('images/hotels', 'public');
                    $hotelImage = new HotelImage(['other_image' => $imagePath]);
                    $hotel->images()->save($hotelImage);
                }
            }
        }

        return redirect('/admin/hotels')->with('success', 'Penginapan baru berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        $categories = HotelCategory::all();

        $other_images = $hotel->images; 

        return view('admin.hotels.edit', compact('hotel', 'categories', 'other_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'address' => 'required|max:255',
            'description' => 'required',
            // 'facilities' => 'nullable',
            'contact' => 'required|max:255',
            'map' => 'required|max:255',
        ];
        
        if ($request->slug != $hotel->slug) {
            $rules['slug'] = 'required|max:255|unique:hotels';
        }
        
        $validatedData = $request->validate($rules);
        
        $hotel->name = $validatedData['name'];
        $hotel->category_id = $validatedData['category_id'];
        $hotel->address = $validatedData['address'];
        $hotel->description = $validatedData['description'];
        $hotel->contact = $validatedData['contact'];
        // $hotel->facilities = $validatedData['facilities'];
        $hotel->map = $validatedData['map'];
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($hotel->image);
        
            $imagePath = $request->file('image')->store('images/hotels', 'public');
            $hotel->image = $imagePath;
        }

        $hotel->slug = $validatedData['slug'] ?? $hotel->slug;
        
        $hotel->save();

        return redirect('/admin/hotels/' . $hotel->slug)->with('success', 'Penginapan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        Storage::disk('public')->delete($hotel->image);
        
        foreach($hotel->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        // Hapus data dari basis data
        $hotel->delete();

        return redirect('/admin/hotels')->with('success', 'Penginapan berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Hotel::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
