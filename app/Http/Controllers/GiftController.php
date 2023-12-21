<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Shop;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
{
    $shop = Shop::where('slug', $slug)->first();
    return view('admin.shops.gifts.create', compact('shop'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $shop = Shop::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:gifts',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'price' => 'required|int',
            'description' => 'required',
        ]);

        $gift = new Gift();
        $gift->name = $validatedData['name'];
        $gift->slug = $validatedData['slug'];
        $gift->shop_id = $shop->id ;
        $gift->price = $validatedData['price'];
        $gift->description = $validatedData['description'];

        $imagePath = $request->file('image')->store('images/gifts', 'public');
        $gift->image = $imagePath;

        $gift->save();

        return redirect('/admin/shops/' . $shop->slug)->with('success', 'Data barang baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Gift $gift)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, Gift $gift)
    {
        $shop = Shop::where('slug', $slug)->first();

        return view('admin.shops.gifts.edit', compact('shop', 'gift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug, Request $request, Gift $gift)
    {
        $shop = Shop::where('slug', $slug)->first();

        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'price' => 'required|int',
            'description' => 'required',
        ];

        if ($request->slug != $gift->slug) {
            $rules['slug'] = 'required|max:255|unique:gifts';
        }

        $validatedData = $request->validate($rules);

        $gift->name = $validatedData['name'];
        $gift->shop_id = $shop->id ;
        $gift->price = $validatedData['price'];
        $gift->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($gift->image);

            $imagePath = $request->file('image')->store('images/gifts', 'public');
            $gift->image = $imagePath;
        }

        $gift->slug = $validatedData['slug'] ?? $gift->slug;

        $gift->save();

        return redirect('/admin/shops/' . $shop->slug)->with('success', 'Data barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, Gift $gift)
    {
        $shop = Shop::where('slug', $slug)->first();

        Storage::disk('public')->delete($gift->image);

        // Hapus data dari basis data
        $gift->delete();

        return redirect('/admin/shops/' . $shop->slug)->with('success', 'Data barang berhasil dihapus.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Gift::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}