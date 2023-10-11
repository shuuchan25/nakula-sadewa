<?php

namespace App\Http\Controllers;

use App\Models\TravelMenu;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TravelMenuPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = TravelMenu::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%');
            });
        }
        $travelMenus = $query->orderBy('created_at', 'desc')->paginate(24);

        return view('/travels/index', compact('travelMenus', 'search'));
    }

    public function show(TravelMenu $travelMenu)
    {
        $travelMenu->load('images', 'travel');

        return view('travels.detail', compact('travelMenu'));
    }

//     public function show(TravelMenu $travelMenu)
// {
//     $travelMenu->load('images');
//     $travelSlug = $travelMenu->travel->slug; // Ambil slug travel terkait
//     return view('travels.detail', compact('travelMenu', 'travelSlug'));
// }


    public function travelMenuSlug(Request $request)
    {
        $slug = SlugService::createSlug(TravelMenu::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}