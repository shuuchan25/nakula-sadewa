<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\AttractionPackage;
use App\Models\AttractionPackageImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionPackageController extends Controller
{

    public function show($slug, AttractionPackage $attractionPackage)
    {
        $attraction = Attraction::where('slug', $slug)->first();
        $attractionPackage->load('images');

        $attractionPackages = $attractionPackage->packages;

        return view('admin.attractions.packages.detail', compact('attraction', 'attractionPackage', 'attractionPackages'));
    }
    /**
     * Show the form for creating a new resource.
     */


    public function create($slug)
    {
        $attraction = Attraction::where('slug', $slug)->first();

        return view('admin.attractions.packages.create', compact('attraction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        // dd($request);
        $attraction = Attraction::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:attraction_packages',
            'price' => 'required|int',
            'video' => 'nullable|max:255',
            'description' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $attractionPackage = new AttractionPackage();
        $attractionPackage->name = $validatedData['name'];
        $attractionPackage->slug = $validatedData['slug'];
        $attractionPackage->attraction_id = $attraction->id;
        $attractionPackage->price = $validatedData['price'];
        $attractionPackage->description = $validatedData['description'];

        if ($request->has('video') && !empty($validatedData['video'])) {
            $attractionPackage->video = $this->transformYoutubeUrl($validatedData['video']);
        }

        // Simpan gambar
        $imagePath = $request->file('image')->store('images/attractionPackages', 'public');
        $attractionPackage->image = $imagePath;

        // Simpan kembali  dengan referensi gambar
        $attractionPackage->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/attractionPackages', 'public');
                    $attractionPackageImage = new AttractionPackageImage(['other_image' => $imagePath]);
                    $attractionPackage->images()->save($attractionPackageImage);
                }
            }
        }

        return redirect('/admin/attractions/' . $attraction->slug)->with('success', 'Data paket wisata baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, AttractionPackage $attractionPackage)
    {
        $attraction = Attraction::where('slug', $slug)->first();

        $other_images = $attractionPackage->images;

        return view('admin.attractions.packages.edit', compact('attraction', 'attractionPackage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug, Request $request, AttractionPackage $attractionPackage)
    {
        $attraction = Attraction::where('slug', $slug)->first();

        $rules = [
            'name' => 'required|max:255',
            'price' => 'required|int',
            'description' => 'required',
            'video' => 'nullable|max:255',
        ];

        if ($request->slug != $attractionPackage->slug) {
            $rules['slug'] = 'required|max:255|unique:attraction_packages';
        }

        $validatedData = $request->validate($rules);

        $attractionPackage->name = $validatedData['name'];
        $attractionPackage->attraction_id = $attraction->id;
        $attractionPackage->price = $validatedData['price'];
        $attractionPackage->description = $validatedData['description'];

        if ($request->input('video') !== $attraction->video) {
            $attraction->video = $this->transformYoutubeUrl($validatedData['video']);
        }


        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($attractionPackage->image);
            $imagePath = $request->file('image')->store('images/attractionPackages', 'public');
            $attractionPackage->image = $imagePath;
        }

        $attractionPackage->slug = $validatedData['slug'] ?? $attractionPackage->slug;

        $attractionPackage->save();

        return redirect('/admin/attractions/' . $attraction->slug)->with('success', 'Data paket wisata berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, AttractionPackage $attractionPackage)
    {
        $attraction = Attraction::where('slug', $slug)->first();

        if ($attractionPackage->image) {
            Storage::disk('public')->delete($attractionPackage->image);
        }

        foreach ($attractionPackage->images as $image) {
            if ($image->other_image) {
                Storage::disk('public')->delete($image->other_image);
            }
            $image->delete();
        }

        // Hapus data dari basis data
        $attractionPackage->delete();

        return redirect('/admin/attractions/' . $attraction->slug)->with('success', 'Data paket wisata berhasil dihapus.');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(AttractionPackage::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    private function transformYoutubeUrl($url)
    {
        $videoId = $this->extractVideoId($url);
        return $videoId ? "https://www.youtube.com/embed/{$videoId}" : null;
    }

    private function extractVideoId($url)
    {
        // Extract video ID from YouTube URL
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);
        return isset($params['v']) ? $params['v'] : null;
    }
}