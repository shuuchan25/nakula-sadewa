<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\AttractionCategory;
use App\Models\AttractionSubCategory;
use App\Models\AttractionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $sub_category_id = $request->input('sub_category_id');
        $query = Attraction::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        if ($sub_category_id) {
            $query->where('sub_category_id', $sub_category_id);
        }

        $attractions = $query->paginate(10);

        $categories = AttractionCategory::all();
        $subCategories = AttractionSubCategory::all();

        $attraction = Auth::user()->attraction;

        return view('admin.attractions.index', compact('attractions', 'attraction', 'search', 'categories', 'subCategories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Attraction $attraction)
    {
        $attraction->load('images');

        $categories = AttractionCategory::all();
        $subCategories = AttractionSubCategory::all();

        $attractionPackages = $attraction->packages;

        return view('admin.attractions.detail', compact('attraction', 'categories', 'subCategories', 'attractionPackages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = AttractionCategory::all();
        $subCategories = AttractionSubCategory::all();

        return view('admin.attractions.create', compact('categories', 'subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:attractions',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'price' => 'nullable|int',
            'map' => 'required',
            'video' => 'nullable|max:255',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif,webp',
            'other_image' => 'max:6',
        ]);

        $existingItem = Attraction::where('user_id', $validatedData['user_id'])->first();
        if ($existingItem) {
            return redirect('/admin/attractions')->with('errors', 'Tidak bisa membuat lebih dari satu data per user');
        }

        $attraction = new Attraction();
        $attraction->name = $validatedData['name'];
        $attraction->slug = $validatedData['slug'];
        $attraction->category_id = $validatedData['category_id'];
        $attraction->sub_category_id = $validatedData['sub_category_id'];
        $attraction->user_id = $validatedData['user_id'];
        $attraction->address = $validatedData['address'];
        $attraction->description = $validatedData['description'];
        $attraction->operational_hour = $validatedData['operational_hour'];
        $attraction->contact = $validatedData['contact'];
        $attraction->price = $validatedData['price'];

        $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
        if ($mapsSrc) {
            $attraction->map = $mapsSrc;
        } else {
            return redirect()->back()->withInput()->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
        }

        if ($request->has('video') && !empty($validatedData['video'])) {
            $attraction->video = $this->transformYoutubeUrl($validatedData['video']);
        }

        $imagePath = $request->file('image')->store('images/attractions', 'public');
        $attraction->image = $imagePath;

        $attraction->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/attractions', 'public');
                    $attractionImage = new AttractionImage(['other_image' => $imagePath]);
                    $attraction->images()->save($attractionImage);
                }
            }
        }

        return redirect('/admin/attractions')->with('success', 'Data atraksi baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attraction $attraction)
    {
        $categories = AttractionCategory::all();
        $subCategories = AttractionSubCategory::all();

        // Find the current subcategory
        $currentSubCategory = $subCategories->where('id', $attraction->sub_category_id)->first();

        // Remove duplicates and add the current subcategory if it exists
        $subCategories = $subCategories->reject(function ($subCategory) use ($currentSubCategory) {
            return $subCategory->id === $currentSubCategory->id;
        })->prepend($currentSubCategory);

        $other_images = $attraction->images;

        return view('admin.attractions.edit', compact('attraction', 'categories', 'subCategories', 'other_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attraction $attraction)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'address' => 'required|max:255',
            'description' => 'required',
            'operational_hour' => 'required|max:255',
            'contact' => 'required|max:255',
            'price' => 'nullable|integer',
            // 'video' => 'nullable|max:255',
        ];

        if ($request->slug != $attraction->slug) {
            $rules['slug'] = 'required|max:255|unique:attractions';
        }

        if ($request->input('map') !== $attraction->map) {
            $rules['map'] = 'required';
        }

        if ($request->input('video') !== $attraction->video) {
            $rules['video'] = 'nullable|max:255';
        }

        $validatedData = $request->validate($rules);

        $attraction->name = $validatedData['name'];
        $attraction->category_id = $validatedData['category_id'];
        $attraction->sub_category_id = $validatedData['sub_category_id'];
        $attraction->address = $validatedData['address'];
        $attraction->description = $validatedData['description'];
        $attraction->operational_hour = $validatedData['operational_hour'];
        $attraction->contact = $validatedData['contact'];
        $attraction->price = $validatedData['price'];

        if ($request->input('map') !== $attraction->map) {
            $mapsSrc = $this->transformGoogleMapsUrl($validatedData['map']);
            if ($mapsSrc) {
                $attraction->map = $mapsSrc;
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['map' => 'Tidak dapat menemukan URL Google Maps']);
            }
        }

        if ($request->input('video') !== $attraction->video) {
            $attraction->video = $this->transformYoutubeUrl($validatedData['video']);
        }

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($attraction->image);

            $imagePath = $request->file('image')->store('images/attractions', 'public');
            $attraction->image = $imagePath;
        }

        $attraction->slug = $validatedData['slug'] ?? $attraction->slug;

        $attraction->save();

        return redirect('/admin/attractions/' . $attraction->slug)->with('success', 'Data atraksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attraction $attraction)
    {

        Storage::disk('public')->delete($attraction->image);

        foreach($attraction->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        $attraction->packages->each(function ($package) {
            Storage::disk('public')->delete($package->image);
            // Delete all related package images
            $package->images->each(function ($image) {
                if ($image->other_image !== null) {
                    Storage::disk('public')->delete($image->other_image);
                }
                $image->delete();
            });

            // Delete the package itself
            $package->delete();
        });

        // Hapus data dari basis data
        $attraction->delete();

        return redirect('/admin/attractions')->with('success', 'Data atraksi berhasil dihapus.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Attraction::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = AttractionSubCategory::where('category_id', $categoryId)->get();

        return response()->json($subcategories);
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