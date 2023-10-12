<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\AttractionCategory;
use App\Models\AttractionSubCategory;
use Illuminate\Http\Request;

class AttractionPageController extends Controller
{
    public function index(Request $request)
    {
        // $search = $request->input('search');
        // // $category_id = $request->input('category_id');
        // $sub_category_id = $request->input('sub_category_id');
        // $query = Attraction::query();

        // if ($search) {
        //     $query->where('name', 'LIKE', '%' . $search . '%');
        // }

        // // if ($category_id) {
        // //     $query->where('category_id', $category_id);
        // // }

        // if ($sub_category_id) {
        //     $query->where('sub_category_id', $sub_category_id);
        // }

        // $attractions = $query->paginate(10);

        // // $categories = AttractionCategory::all();
        // $subCategories = AttractionSubCategory::all();

        // return view('atraksi', compact('attractions', 'search', 'subCategories'));

        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $sub_category_id = $request->input('sub_category_id');
        $query = Attraction::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        } else {
            // Set the default category ID if not provided in the request
            $categories = AttractionCategory::all();
            $firstCategory = $categories->first();
            $category_id = $firstCategory->id;
            $query->where('category_id', $category_id);
        }

        if ($sub_category_id) {
            $query->where('sub_category_id', $sub_category_id);
        }

        $attractions = $query->paginate(10);
        $categories = AttractionCategory::all();
        $subCategories = AttractionSubCategory::all();

        return view('atraksi', compact('attractions', 'search', 'categories', 'subCategories'));
    }
}
