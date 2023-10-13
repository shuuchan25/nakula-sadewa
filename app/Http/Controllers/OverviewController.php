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
use Illuminate\Support\Carbon;

class OverviewController extends Controller
{
    public function index()
    {
        $hotelData = Hotel::count();
        $attractionData = Attraction::count();
        $culinaryData = Culinary::count();
        $travelData = Travel::count();
        $eventData = Event::count();
        $shopData = Shop::count();
        $userData = User::count();
        // $accessesData = Access::count();

        $accessCounts = Access::select(DB::raw('DATE(date) as access_date'), DB::raw('COUNT(*) as access_count'))
            ->groupBy('access_date')
            ->get();

        // Ambil tanggal dan jumlah akses dari hasil query
        $accessDates = $accessCounts->pluck('access_date');
        $accessCounts = $accessCounts->pluck('access_count');

        $start_date = now()->startOfMonth(); // Awal bulan saat ini
        $end_date = now()->endOfMonth(); // Akhir bulan saat ini

        $access_counts = DB::table('accesses')
            ->select(DB::raw('date, COUNT(*) as access_count'))
            ->whereBetween('date', [$start_date, $end_date])
            ->groupBy('date')
            ->get();

        $accessData = $this->getAccessCounts();
        // dd($accesses);
        $accesses = Access::all();

        return view('admin.overviews', compact('accessDates', 'accessCounts', 'hotelData', 'attractionData', 'culinaryData', 'travelData', 'eventData', 'userData', 'shopData', 'accesses', 'accessData', 'access_counts'));
    }

    public function getAccessCounts()
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Menghitung total akses dalam sebulan ini
        $accessCountsThisMonth = Access::whereMonth('date', $currentMonth)
            ->whereYear('date', $currentYear)
            ->count();

        // Menghitung total akses dalam satu tahun ini
        $accessCountsThisYear = Access::whereYear('date', $currentYear)->count();

        // Menghitung total akses untuk setiap bulan dalam tahun ini
        $monthlyCounts = [];
        for ($month = 1; $month <= 12; $month++) {
            $count = Access::whereMonth('date', $month)
                ->whereYear('date', $currentYear)
                ->count();
            $monthlyCounts[$month] = $count;
        }

        // Menghitung total akses per hari dalam bulan ini
        $accessCountsThisMonthDaily = Access::select(DB::raw('DATE(date) as access_date'), DB::raw('COUNT(*) as access_count'))
            ->whereMonth('date', $currentMonth)
            ->whereYear('date', $currentYear)
            ->groupBy('access_date')
            ->get();

        // Ambil tanggal dan jumlah akses dari hasil query
        $accessDatesThisMonth = $accessCountsThisMonthDaily->pluck('access_date');
        $accessCountsThisMonthDaily = $accessCountsThisMonthDaily->pluck('access_count');

        return [
            'accessCountsThisMonth' => $accessCountsThisMonth,
            'accessCountsThisYear' => $accessCountsThisYear,
            'monthlyCounts' => $monthlyCounts,
            'accessDatesThisMonth' => $accessDatesThisMonth,
            'accessCountsThisMonthDaily' => $accessCountsThisMonthDaily,
        ];
    }

}