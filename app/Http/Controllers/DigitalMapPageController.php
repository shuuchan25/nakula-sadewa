<?php

namespace App\Http\Controllers;

use App\Models\DigitalMap;
use App\Models\MapCategory;
use Illuminate\Http\Request;

class DigitalMapPageController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    $category_id = $request->input('category_id');
    $query = DigitalMap::query();

    if ($search) {
        $query->where('name', 'LIKE', '%' . $search . '%');
    }

    if ($category_id) {
        $query->whereHas('category', function($q) use ($category_id) {
            $q->where('id', $category_id);
        });
    }

    $maps = $query->paginate(100);

    $categories = MapCategory::all();

    if (is_null($maps) || is_null($categories)) {
        // Handle jika data null
        // Misalnya, kembalikan response atau tampilkan pesan kesalahan
    } else {
        return view('maps', compact('maps', 'search', 'categories'));
    }
}

}