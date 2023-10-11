<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TravelPageController extends Controller
{
    public function show(Travel $travel)
    {

        $travel->load('images');

        $travelMenus = $travel->menus;

        return view('travels.profile', compact('travel', 'travelMenus'));
    }

    public function travelSlug(Request $request)
    {
        $slug = SlugService::createSlug(TravelMenu::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}