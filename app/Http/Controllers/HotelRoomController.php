<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelRoom;
use App\Models\RoomImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelRoomController extends Controller
{
    public function show($slug, HotelRoom $hotelRoom)
    {
        $hotel = Hotel::where('slug', $slug)->first();
        $hotelRoom->load('images');

        $hotelRooms = $hotelRoom->rooms;

        return view('admin.hotels.rooms.detail', compact('hotel', 'hotelRooms', 'hotelRoom'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $hotel = Hotel::where('slug', $slug)->first();

        return view('admin.hotels.rooms.create', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $hotel = Hotel::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:hotel_rooms',
            'price' => 'required|int',
            'capacity' => 'required|int',
            'description' => 'required',
            'image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'image' => 'max:6',
        ]);

        $hotelRoom = new HotelRoom();
        $hotelRoom->name = $validatedData['name'];
        $hotelRoom->slug = $validatedData['slug'];
        $hotelRoom->hotel_id = $hotel->id;
        $hotelRoom->price = $validatedData['price'];
        $hotelRoom->capacity = $validatedData['capacity'];
        $hotelRoom->description = $validatedData['description'];

        $hotelRoom->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/rooms', 'public');
                    $hotelRoomImage = new RoomImage(['image' => $imagePath]);
                    $hotelRoom->images()->save($hotelRoomImage);
                }
            }
        }

        return redirect('/admin/hotels/' . $hotel->slug)->with('success', 'Data kamar baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, HotelRoom $hotelRoom)
    {
        $hotel = Hotel::where('slug', $slug)->first();

        $roomImages = $hotelRoom->images;

        return view('admin.hotels.rooms.edit', compact('hotel', 'hotelRoom', 'roomImages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug, Request $request, HotelRoom $hotelRoom)
    {
        $hotel = Hotel::where('slug', $slug)->first();

        $rules = [
            'name' => 'required|max:255',
            'price' => 'required|int',
            'capacity' => 'required|int',
            'description' => 'required',
            'image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
        ];

        if ($request->slug != $hotelRoom->slug) {
            $rules['slug'] = 'required|max:255|unique:hotel_rooms';
        }

        $validatedData = $request->validate($rules);

        $hotelRoom->name = $validatedData['name'];
        $hotelRoom->hotel_id = $hotel->id;
        $hotelRoom->price = $validatedData['price'];
        $hotelRoom->capacity = $validatedData['capacity'];
        $hotelRoom->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            // Count the existing images for the $hotel
            $existingImagesCount = $hotelRoom->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('image')) > $maxImages) {
                return redirect('/admin/hotels/' . $hotel->slug . '/rooms/' . $hotelRoom->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/rooms', 'public');
                    $roomImage = new RoomImage(['image' => $imagePath]);
                    $hotelRoom->images()->save($roomImage);
                }
            }
        }

        $hotelRoom->slug = $validatedData['slug'] ?? $hotelRoom->slug;

        $hotelRoom->save();

        return redirect('/admin/hotels/' . $hotel->slug)->with('success', 'Data kamar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, HotelRoom $hotelRoom)
    {
        $hotel = Hotel::where('slug', $slug)->first();

        foreach ($hotelRoom->images as $image) {
            Storage::disk('public')->delete($image->image);
            $image->delete();
        }

        // Hapus data dari basis data
        $hotelRoom->delete();

        return redirect('/admin/hotels/' . $hotel->slug)->with('success', 'Data kamar berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(HotelRoom::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}