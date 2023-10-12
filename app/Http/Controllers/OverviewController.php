<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Attraction;
use App\Models\Culinary;
use App\Models\Event;
use App\Models\Hotel;
use App\Models\Shop;
use App\Models\Travel;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $accessCounts = Access::select(DB::raw('DATE(date) as access_date'), DB::raw('COUNT(*) as access_count'))
            ->groupBy('access_date')
            ->get();

        // Ambil tanggal dan jumlah akses dari hasil query
        $accessDates = $accessCounts->pluck('access_date');
        $accessCounts = $accessCounts->pluck('access_count');

        $accesses = Access::all();
        $accessesData = Access::count();
        $hotelData = Hotel::count();
        $attractionData = Attraction::count();
        $culinaryData = Culinary::count();
        $travelData = Travel::count();
        $eventData = Event::count();
        $shopData = Shop::count();
        $userData = User::count();

        return view('admin.overviews', compact('accessDates', 'accessCounts', 'hotelData', 'attractionData', 'culinaryData', 'travelData', 'eventData', 'userData', 'shopData', 'accesses', 'accessesData'));
    }
}