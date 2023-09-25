<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Hotel;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $hotelData = Hotel::count();
        $attractionData = Attraction::count();

        return view('admin.overviews', compact('hotelData', 'attractionData'));
    }
}
