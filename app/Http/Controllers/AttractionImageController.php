<?php

namespace App\Http\Controllers;

use App\Models\AttractionImage;
use App\Models\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $attraction = Attraction::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            $existingImagesCount = $attraction->images()->count();
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/attractions/' . $attraction->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/attractions', 'public');
                    $attractionImage = new AttractionImage(['other_image' => $imagePath]);
                    $attraction->images()->save($attractionImage);
                }
            }
        }

        return redirect('/admin/attractions/' . $attraction->slug . '/edit')->with('success', 'Gambar Item berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $other_image = AttractionImage::findOrFail($id);
        $attraction = $other_image->attraction;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/attractions/' . $attraction->slug . '/edit')->with('success', 'Gambar Item berhasil dihapus');
    }
}