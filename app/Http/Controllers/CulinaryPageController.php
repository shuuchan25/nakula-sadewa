<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\CulinaryCategory;
use App\Models\CulinaryMenu;
use App\Models\CulinaryMenuCategory;
use Illuminate\Http\Request;

class CulinaryPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $query = Culinary::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $culinaries = $query->paginate(10);

        $categories = CulinaryCategory::all();

        return view('culinaries.index', compact('culinaries', 'search', 'categories'));
    }

    public function show(Culinary $culinary)
    {

        $culinaryMenus = $culinary->menus()->take(5)->get();

        return view('culinaries.detail', compact('culinary', 'culinaryMenus'));
    }

    public function menus(Request $request, Culinary $culinary)
    {
        $search = $request->input('search');
        $menu_category_id = $request->input('menu_category_id');
        $query = CulinaryMenu::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($menu_category_id) {
            $query->where('menu_category_id', $menu_category_id);
        }

        $culinaryMenus = $culinary->menus;

        $culinaryMenus = $query->paginate(10);

        $menuCategories = CulinaryMenuCategory::all();

        return view('culinaries.menus', compact('culinary', 'culinaryMenus', 'menuCategories'));
    }
}
