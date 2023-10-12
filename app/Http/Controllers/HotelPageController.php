<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class HotelPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = Hotel::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $hotels = $query->paginate(10);

        $categories = HotelCategory::all();

        return view('hotels.index', compact('hotels', 'search', 'categories'));
    }

    public function show(Hotel $hotel)
    {

        $hotel->load('images');

        $hotelRooms = $hotel->rooms;

        $roomImages = $hotelRooms->load('images');

        $categories = HotelCategory::all();

        return view('hotels.detail', compact('hotel', 'categories', 'hotelRooms', 'roomImages'));
    }


    public function travelMenuSlug(Request $request)
    {
        $slug = SlugService::createSlug(Hotel::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}