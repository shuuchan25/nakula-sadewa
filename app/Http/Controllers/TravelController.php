<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Travel::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $travels = $query->paginate(10);

        return view('admin.travels.index', compact('travels', 'search'));
    }

    public function show(Travel $travel)
    {

        $travel->load('images');

        $travelMenus = $travel->menus;

        return view('admin.travels.detail', compact('travel', 'travelMenus'));
    }

    public function create()
    {
        return view('admin.travels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:travels',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'contact' => 'required|max:255',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $travel = new Travel();
        $travel->name = $validatedData['name'];
        $travel->slug = $validatedData['slug'];
        $travel->address = $validatedData['address'];
        $travel->description = $validatedData['description'];
        $travel->contact = $validatedData['contact'];

        $imagePath = $request->file('image')->store('images/travels', 'public');
        $travel->image = $imagePath;

        $travel->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/travels', 'public');
                    $travelImage = new TravelImage(['other_image' => $imagePath]);
                    $travel->images()->save($travelImage);
                }
            }
        }

        return redirect('/admin/travels')->with('success', 'Biro perjalanan baru berhasil dibuat!');
    }

    public function edit(Travel $travel)
    {
        $other_images = $travel->images;

        return view('admin.travels.edit', compact('travel', 'other_images'));
    }

    public function update(Request $request, Travel $travel)
    {
        $rules = [
            'name' => 'required|max:255',
            // 'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'contact' => 'required|max:255',
        ];

        if ($request->slug != $travel->slug) {
            $rules['slug'] = 'required|max:255|unique:travels';
        }

        $validatedData = $request->validate($rules);

        $travel->name = $validatedData['name'];
        $travel->address = $validatedData['address'];
        $travel->description = $validatedData['description'];
        $travel->contact = $validatedData['contact'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($travel->image);

            $imagePath = $request->file('image')->store('images/travels', 'public');
            $travel->image = $imagePath;
        }

        $travel->slug = $validatedData['slug'] ?? $travel->slug;

        $travel->save();

        return redirect('/admin/travels/' . $travel->slug)->with('success', 'Biro perjalanan berhasil diperbarui!');
    }
    public function destroy(Travel $travel)
    {
        if ($travel->image !== null) {
            Storage::disk('public')->delete($travel->image);
        }

        foreach($travel->images as $image) {
            if ($image->other_image !== null) {
                Storage::disk('public')->delete($image->other_image);
            }
            $image->delete();
        }

        // Delete all related menus and their images
        $travel->menus->each(function ($menu) {
            // Delete all related menu images
            $menu->images->each(function ($image) {
                if ($image->image !== null) {
                    Storage::disk('public')->delete($image->image);
                }
                $image->delete();
            });

            // Delete the menu itself
            $menu->delete();
        });

        // Hapus data dari basis data
        $travel->delete();

        return redirect('/admin/travels')->with('success', 'Data Biro Perjalanan berhasil dihapus!');
    }


    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Travel::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}