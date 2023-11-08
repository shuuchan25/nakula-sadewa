<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Attraction;
use App\Models\Culinary;
use App\Models\Event;
use App\Models\Hotel;
use App\Models\Shop;
use App\Models\Transaction;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Support\Facades\DB; 
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
        $transactionData = Transaction::count();

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

        return view('admin.overviews', compact('accessDates', 'accessCounts', 'hotelData', 'attractionData', 'culinaryData', 'travelData', 'eventData', 'userData', 'transactionData', 'shopData', 'accesses', 'accessData', 'access_counts'));
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
            ->whereDate('date', Carbon::today()) // Hanya hitung akses hari ini
            ->groupBy('access_date')
            ->first(); // Mengambil hanya satu hasil (data akses hari ini)

        // Ambil tanggal dan jumlah akses dari hasil query
        $accessDateToday = optional($accessCountsThisMonthDaily)->access_date;
        $accessCountToday = optional($accessCountsThisMonthDaily)->access_count;

        return [
            'accessCountsThisMonth' => $accessCountsThisMonth,
            'accessCountsThisYear' => $accessCountsThisYear,
            'monthlyCounts' => $monthlyCounts,
            'accessDateToday' => $accessDateToday, // Pastikan variabel ini ada dalam data yang Anda kirimkan.
            'accessCountToday' => $accessCountToday,
        ];

    }

    public function dailyAccess()
    {
        $accessData = $this->getAccessCounts();
        return view('daily_access', compact('accessData'));
    }

    public function monthlyAccess()
    {
        $accessData = $this->getAccessCounts();
        return view('monthly_access', compact('accessData'));
    }

    public function yearlyAccess()
    {
        $accessData = $this->getAccessCounts();
        return view('yearly_access', compact('accessData'));
    }
}