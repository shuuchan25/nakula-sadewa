<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Shop::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }


        $shops = $query->paginate(20);

        return view('shops.index', compact('shops', 'search'));
    }

    public function show(Shop $shop)
    {

        $gifts = $shop->gifts()->take(5)->get();

        return view('shops.detail', compact('shop', 'gifts'));
    }

    public function gifts(Request $request, Shop $shop)
    {
        $search = $request->input('search');
        $query = Gift::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $gifts = $shop->gifts;

        $gifts = $query->paginate(10);

        return view('shops.gifts', compact('shop', 'gifts'));
    }
}