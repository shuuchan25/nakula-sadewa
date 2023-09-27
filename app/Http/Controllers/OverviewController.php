<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Culinary;
use App\Models\Event;
use App\Models\Hotel;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $hotelData = Hotel::count();
        $attractionData = Attraction::count();
        $culinaryData = Culinary::count();
        $travelData = Travel::count();
        $eventData = Event::count();
        $userData = User::count();

        return view('admin.overviews', compact('hotelData', 'attractionData', 'culinaryData', 'travelData', 'eventData', 'userData'));
    }
}
