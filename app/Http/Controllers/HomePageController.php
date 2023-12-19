<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Article;
use App\Models\Event;
use App\Models\Heroimage;
use App\Models\Review;
use App\Models\Story;
use App\Models\Webprofile;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $date = now()->today(); // Mendapatkan tanggal saat ini
        $ip_address = request()->ip(); // Mendapatkan alamat IP pengguna

        Access::create([
            'date' => $date,
            'ip_address' => $ip_address,
        ]);

        $accesses = Access::all();

        $galleries = Heroimage::all();
        $webprofile = Webprofile::first();

        $now = now();
        $events = Event::whereMonth('date', $now->month)
            ->whereYear('date', $now->year)
            ->whereDate('date', '>=', $now->toDateString()) // Hanya tampilkan acara dengan tanggal terdekat atau setelahnya
            ->orderBy('date', 'asc') // Urutkan berdasarkan tanggal (dari yang terdekat)
            ->take(6)
            ->get();

        $articles = Article::take(6)
            ->orderBy('created_at', 'desc')
            ->get();

        $stories = Story::all();
        // $reviews = Review::all();

        $reviews = Review::where('is_shown', true)->get();

        return view('welcome', compact('galleries', 'webprofile', 'stories', 'events', 'articles', 'reviews', 'accesses'));
    }
}

// $ip_address = request()->ip(); // Mendapatkan alamat IP pengguna

// // Mendapatkan akses terakhir dari IP yang sama
// $lastAccess = Access::where('ip_address', $ip_address)
//     ->latest('date')
//     ->first();

// // Cek apakah akses terakhir sudah pada hari yang sama
// if (!$lastAccess || !(new \Carbon\Carbon($lastAccess->date))->isToday()) {
//     // Jika tidak, catat akses baru
//     $date = now();

//     Access::create([
//         'date' => $date,
//         'ip_address' => $ip_address,
//     ]);
// }