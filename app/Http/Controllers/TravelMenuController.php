<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelMenu;
use App\Models\TravelMenuImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelMenuController extends Controller
{
    public function detailPackage($slug, TravelMenu $travelMenu)
    {
        $travel = Travel::where('slug', $slug)->first();
        $travelMenu->load('images');

        $travelMenus = $travelMenu->menus;

        return view('admin.travels.travel-menus.detail', compact('travel', 'travelMenus', 'travelMenu'));
    }

    public function show($slug, TravelMenu $travelMenu)
    {
        $travel = Travel::where('slug', $slug)->first();
        $travelMenu->load('images');

        $travelMenus = $travelMenu->menus;

        return view('admin.travels.travel-menus.detail', compact('travel', 'travelMenus', 'travelMenu'));
    }

    public function create($slug)
    {
        $travel = Travel::where('slug', $slug)->first();

        return view('admin.travels.travel-menus.create', compact('travel'));
    }

    public function store(Request $request, $slug)
    {
        $travel = Travel::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:travel_menus',
            'price' => 'required|int',
            'description' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $travelMenu = new TravelMenu();
        $travelMenu->name = $validatedData['name'];
        $travelMenu->slug = $validatedData['slug'];
        $travelMenu->travel_id = $travel->id;
        $travelMenu->price = $validatedData['price'];
        $travelMenu->description = $validatedData['description'];

        // Simpan gambar
        $imagePath = $request->file('image')->store('images/travelMenus', 'public');
        $travelMenu->image = $imagePath;

        // Simpan kembali travelMenu dengan referensi gambar
        $travelMenu->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/travelMenus', 'public');
                    $travelMenuImage = new TravelMenuImage(['other_image' => $imagePath]);
                    $travelMenu->images()->save($travelMenuImage);
                }
            }
        }

        return redirect('/admin/travels/' . $travel->slug)->with('success', 'Data paket wisata baru berhasil dibuat.');
    }

    public function edit($slug, TravelMenu $travelMenu)
    {
        $travel = Travel::where('slug', $slug)->first();

        $other_images = $travelMenu->images;

        return view('admin.travels.travel-menus.edit', compact('travel', 'travelMenu'));
    }

    public function update($slug, Request $request, TravelMenu $travelMenu)
    {
        $travel = Travel::where('slug', $slug)->first();

        $rules = [
            'name' => 'required|max:255',
            'price' => 'required|int',
            'description' => 'required',
        ];

        if ($request->slug != $travelMenu->slug) {
            $rules['slug'] = 'required|max:255|unique:travel_menus';
        }

        $validatedData = $request->validate($rules);

        $travelMenu->name = $validatedData['name'];
        $travelMenu->travel_id = $travel->id;
        $travelMenu->price = $validatedData['price'];
        $travelMenu->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($travelMenu->image);
            $imagePath = $request->file('image')->store('images/travelMenus', 'public');
            $travelMenu->image = $imagePath;
        }

        $travelMenu->slug = $validatedData['slug'] ?? $travelMenu->slug;

        $travelMenu->save();

        return redirect('/admin/travels/' . $travel->slug)->with('success', 'Data paket wisata berhasil diperbarui.');
    }

    public function destroy($slug, TravelMenu $travelMenu)
    {
        $travel = Travel::where('slug', $slug)->first();

        if ($travelMenu->image) {
            Storage::disk('public')->delete($travelMenu->image);
        }

        foreach ($travelMenu->images as $image) {
            if ($image->image) {
                Storage::disk('public')->delete($image->image);
            }
            $image->delete();
        }

        // Hapus data dari basis data
        $travelMenu->delete();

        return redirect('/admin/travels/' . $travel->slug)->with('success', 'Data paket wisata berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(TravelMenu::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}