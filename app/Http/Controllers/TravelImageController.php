<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $travel = Travel::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $travel
            $existingImagesCount = $travel->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/travels/' . $travel->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/travels', 'public');
                    $travelImage = new TravelImage(['other_image' => $imagePath]);
                    $travel->images()->save($travelImage);
                }
            }
        }

        return redirect('/admin/travels/' . $travel->slug . '/edit')->with('success', 'Gambar travel berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $other_image = TravelImage::findOrFail($id);
        $travel = $other_image->travel;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/travels/' . $travel->slug . '/edit')->with('success', 'Gambar travel berhasil dihapus');
    }
}