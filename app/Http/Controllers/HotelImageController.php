<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $hotel
            $existingImagesCount = $hotel->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/hotels/' . $hotel->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/hotels', 'public');
                    $hotelImage = new HotelImage(['other_image' => $imagePath]);
                    $hotel->images()->save($hotelImage);
                }
            }
        }

        return redirect('/admin/hotels/' . $hotel->slug . '/edit')->with('success', 'Gambar Penginapan berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $other_image = HotelImage::findOrFail($id);
        $hotel = $other_image->hotel;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/hotels/' . $hotel->slug . '/edit')->with('success', 'Gambar Penginapan berhasil dihapus');
    }
}
