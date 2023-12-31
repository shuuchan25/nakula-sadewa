<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelCategory;
use App\Models\HotelImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $hotel = Auth::user()->hotel;

        return view('admin.hotels.index', compact('hotels', 'hotel', 'search', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        $hotel->load('images');

        $hotelRooms = $hotel->rooms;

        $roomImages = $hotelRooms->load('images');

        $categories = HotelCategory::all();

        return view('admin.hotels.detail', compact('hotel', 'categories', 'hotelRooms', 'roomImages'));
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
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:hotels',
            'category_id' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'contact' => 'required|max:255',
            'map' => 'required',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $existingItem = Hotel::where('user_id', $validatedData['user_id'])->first();
        if ($existingItem) {
            return redirect('/admin/hotels')->with('errors', 'Tidak bisa membuat lebih dari satu data per user');
        }

        $hotel = new Hotel();
        $hotel->name = $validatedData['name'];
        $hotel->slug = $validatedData['slug'];
        $hotel->category_id = $validatedData['category_id'];
        $hotel->user_id = $validatedData['user_id'];
        $hotel->address = $validatedData['address'];
        $hotel->description = $validatedData['description'];
        $hotel->contact = $validatedData['contact'];

        $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
        if ($mapsSrc) {
            $hotel->map = $mapsSrc;
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
        }

        $imagePath = $request->file('image')->store('images/hotels', 'public');
        $hotel->image = $imagePath;

        $hotel->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/hotels', 'public');
                    $hotelImage = new HotelImage(['other_image' => $imagePath]);
                    $hotel->images()->save($hotelImage);
                }
            }
        }

        return redirect('/admin/hotels')->with('success', 'Data akomodasi baru berhasil dibuat.');
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
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'contact' => 'required|max:255',
        ];

        if ($request->slug != $hotel->slug) {
            $rules['slug'] = 'required|max:255|unique:hotels';
        }

        // Pengecekan kondisi apakah field map kosong atau tidak
        if ($request->input('map') !== $hotel->map) {
            $rules['map'] = 'required';
        }

        $validatedData = $request->validate($rules);

        $hotel->name = $validatedData['name'];
        $hotel->category_id = $validatedData['category_id'];
        $hotel->address = $validatedData['address'];
        $hotel->description = $validatedData['description'];
        $hotel->contact = $validatedData['contact'];

        if ($request->input('map') !== $hotel->map) {
            $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
            if ($mapsSrc) {
                $hotel->map = $mapsSrc;
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
            }
        }

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($hotel->image);

            $imagePath = $request->file('image')->store('images/hotels', 'public');
            $hotel->image = $imagePath;
        }

        $hotel->slug = $validatedData['slug'] ?? $hotel->slug;

        $hotel->save();

        return redirect('/admin/hotels/' . $hotel->slug)->with('success', 'Data akomodasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        // $hotel->rooms->each->delete();

        Storage::disk('public')->delete($hotel->image);

        foreach ($hotel->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        // Delete all related rooms and their images
        $hotel->rooms->each(function ($room) {
            // Delete all related room images
            $room->images->each(function ($image) {
                Storage::disk('public')->delete($image->image);
                $image->delete();
            });

            // Delete the room itself
            $room->delete();
        });

        // Hapus data dari basis data
        $hotel->delete();

        return redirect('/admin/hotels')->with('success', 'Data akomodasi berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Hotel::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    private function transformGoogleMapsUrl($url)
    {
        $mapsSrc = $this->extractGoogleMapsSrc($url);
        return $mapsSrc ? $mapsSrc : null;
    }

    private function extractGoogleMapsSrc($html)
    {
        $regex = '/src="([^"]+)"/';
        preg_match($regex, $html, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }
}