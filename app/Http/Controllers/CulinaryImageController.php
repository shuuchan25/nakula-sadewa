<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\CulinaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CulinaryImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $culinary = Culinary::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            $existingImagesCount = $culinary->images()->count();
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/culinaries/' . $culinary->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/culinaries', 'public');
                    $culinaryImage = new CulinaryImage(['other_image' => $imagePath]);
                    $culinary->images()->save($culinaryImage);
                }
            }
        }

        return redirect('/admin/culinaries/' . $culinary->slug . '/edit')->with('success', 'Gambar wisata kuliner berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $other_image = CulinaryImage::findOrFail($id);
        $culinary = $other_image->culinary;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/culinaries/' . $culinary->slug . '/edit')->with('success', 'Gambar wisata kuliner berhasil dihapus.');
    }
}