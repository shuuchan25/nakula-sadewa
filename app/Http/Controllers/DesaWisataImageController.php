<?php

namespace App\Http\Controllers;

use App\Models\DesaWisataImage;
use App\Models\DesaWisataItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesaWisataImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $desaWisataItem = DesaWisataItem::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $desaWisataItem
            $existingImagesCount = $desaWisataItem->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/desa-wisata/' . $desaWisataItem->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/desa-wisata', 'public');
                    $desaWisataImage = new DesaWisataImage(['other_image' => $imagePath]);
                    $desaWisataItem->images()->save($desaWisataImage);
                }
            }
        }

        return redirect('/admin/desa-wisata/' . $desaWisataItem->slug . '/edit')->with('success', 'Gambar desa Wisata berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $other_image = DesaWisataImage::findOrFail($id);
        $desaWisataItem = $other_image->desaWisataItem;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/desa-wisata/' . $desaWisataItem->slug . '/edit')->with('success', 'Gambar desa Wisata berhasil dihapus');
    }
}
