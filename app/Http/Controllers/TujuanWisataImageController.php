<?php

namespace App\Http\Controllers;

use App\Models\TujuanWisataImage;
use App\Models\TujuanWisataItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TujuanWisataImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $tujuanWisataItem = TujuanWisataItem::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $tujuanWisataItem
            $existingImagesCount = $tujuanWisataItem->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/tujuan-wisata/' . $tujuanWisataItem->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/tujuan-wisata', 'public');
                    $tujuanWisataImage = new TujuanWisataImage(['other_image' => $imagePath]);
                    $tujuanWisataItem->images()->save($tujuanWisataImage);
                }
            }
        }

        return redirect('/admin/tujuan-wisata/' . $tujuanWisataItem->slug . '/edit')->with('success', 'Gambar Tujuan Wisata berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $other_image = TujuanWisataImage::findOrFail($id);
        $tujuanWisataItem = $other_image->tujuanWisataItem;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/tujuan-wisata/' . $tujuanWisataItem->slug . '/edit')->with('success', 'Gambar Tujuan Wisata berhasil dihapus');
    }
}
