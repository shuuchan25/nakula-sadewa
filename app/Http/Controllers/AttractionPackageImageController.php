<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\AttractionPackage;
use App\Models\AttractionPackageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionPackageImageController extends Controller
{
    public function store(Request $request, $attractionSlug, $id)
    {
        // dd($request);
        $attraction = Attraction::where('slug', $attractionSlug)->firstOrFail();
        $attractionPackage = AttractionPackage::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $attractionPackage
            $existingImagesCount = $attractionPackage->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/attractions/' . $attraction->slug . '/packages/' . $attractionPackage->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/attractionPackages', 'public');
                    $attractionPackageImage = new AttractionPackageImage(['other_image' => $imagePath]);
                    $attractionPackage->images()->save($attractionPackageImage);
                }
            }
        }

        return redirect('/admin/attractions/' . $attraction->slug . '/packages/' . $attractionPackage->slug . '/edit')->with('success', 'Gambar paket wisata berhasil ditambahkan.');
    }

    public function destroy($attractionSlug, $id)
    {
        $attraction = Attraction::where('slug', $attractionSlug)->firstOrFail();

        $other_image = AttractionPackageImage::findOrFail($id);
        $attractionPackage = $other_image->attractionPackage;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/attractions/' . $attraction->slug . '/packages/' . $attractionPackage->slug . '/edit')->with('success', 'Gambar paket wisata berhasil dihapus.');
    }
}
