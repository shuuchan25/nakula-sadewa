<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Shop;
use App\Models\ShopImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Shop::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $shops = $query->paginate(10);

        return view('admin.shops.index', compact('shops', 'search'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop, Request $request)
    {
        $search = $request->input('search');
        $query = Gift::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $shop->load('images');

        $gifts = $shop->gifts;

        $gifts = $query->paginate(10);

        return view('admin.shops.detail', compact('shop', 'gifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:attractions',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'map' => 'required',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $shop = new Shop();
        $shop->name = $validatedData['name'];
        $shop->slug = $validatedData['slug'];
        $shop->address = $validatedData['address'];
        $shop->description = $validatedData['description'];
        $shop->operational_hour = $validatedData['operational_hour'];
        $shop->contact = $validatedData['contact'];

        $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
        if ($mapsSrc) {
            $shop->map = $mapsSrc;
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
        }

        $imagePath = $request->file('image')->store('images/shops', 'public');
        $shop->image = $imagePath;

        $shop->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    // $fileMimeType = $otherImageFile->getMimeType();
                    // dd($fileMimeType);
                    $imagePath = $otherImageFile->store('images/shops', 'public');
                    $shopImage = new ShopImage(['other_image' => $imagePath]);
                    $shop->images()->save($shopImage);
                }
            }
        }

        return redirect('/admin/shops/' . $shop->slug)->with('success', 'Item baru berhasil dibuat!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {

        $other_images = $shop->images;

        return view('admin.shops.edit', compact('shop', 'other_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
        ];

        if ($request->slug != $shop->slug) {
            $rules['slug'] = 'required|max:255|unique:shops';
        }

        // Pengecekan kondisi apakah field map kosong atau tidak
        if ($request->input('map') !== $shop->map) {
            $rules['map'] = 'required';
        }

        $validatedData = $request->validate($rules);

        $shop->name = $validatedData['name'];
        $shop->address = $validatedData['address'];
        $shop->description = $validatedData['description'];
        $shop->operational_hour = $validatedData['operational_hour'];
        $shop->contact = $validatedData['contact'];

        if ($request->input('map') !== $shop->map) {
            $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
            if ($mapsSrc) {
                $shop->map = $mapsSrc;
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
            }
        }


        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($shop->image);

            $imagePath = $request->file('image')->store('images/shops', 'public');
            $shop->image = $imagePath;
        }

        $shop->slug = $validatedData['slug'] ?? $shop->slug;

        $shop->save();

        return redirect('/admin/shops/' . $shop->slug)->with('success', 'Item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        Storage::disk('public')->delete($shop->image);

        foreach($shop->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        $shop->gifts->each(function ($gift) {
            // Delete all related room images
            Storage::disk('public')->delete($gift->image);

            // Delete the room itself
            $gift->delete();
        });

        // Hapus data dari basis data
        $shop->delete();

        return redirect('/admin/shops')->with('success', 'Item berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Shop::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    private function transformGoogleMapsUrl($url)
    {
        $mapsSrc = $this->extractGoogleMapsSrc($url);
        return $mapsSrc ? $mapsSrc : null;
    }

    private function extractGoogleMapsSrc($html)
    {
        $regex = '/src="([^"]+)"/';
        preg_match($regex, $html, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }
}