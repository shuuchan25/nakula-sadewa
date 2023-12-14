<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            $existingImagesCount = $shop->images()->count();
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/shops/' . $shop->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/shops', 'public');
                    $shopImage = new ShopImage(['other_image' => $imagePath]);
                    $shop->images()->save($shopImage);
                }
            }
        }

        return redirect('/admin/shops/' . $shop->slug . '/edit')->with('success', 'Gambar toko berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $other_image = ShopImage::findOrFail($id);
        $shop = $other_image->shop;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/shops/' . $shop->slug . '/edit')->with('success', 'Gambar toko berhasil dihapus.');
    }
}