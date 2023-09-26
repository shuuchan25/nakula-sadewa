<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelMenu;
use App\Models\TravelMenuImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelMenuImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $travelMenu = TravelMenu::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $travelMenu
            $existingImagesCount = $travelMenu->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/travels/' . $travelMenu->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/travels', 'public');
                    $travelMenuImage = new TravelMenuImage(['other_image' => $imagePath]);
                    $travelMenu->images()->save($travelMenuImage);
                }
            }
        }

        return redirect('/admin/travels/' . $travelMenu->slug . '/edit')->with('success', 'Gambar Penginapan berhasil ditambahkan');
    }

    public function destroy($slug, $id)
    {
        $travel = Travel::where('slug', $slug)->first();

        $other_image = TravelMenuImage::findOrFail($id);
        $travelMenu = $other_image->travelMenu;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/travels/' . $travel->slug . '/menus/' . $travelMenu->slug . '/edit')->with('success', 'Gambar paket berhasil dihapus');
    }
}