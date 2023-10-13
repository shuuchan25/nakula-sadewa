<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    $selectedMonth = $request->input('selectedMonth');

    $query = Event::query();

    if ($search) {
        $query->where('title', 'LIKE', '%' . $search . '%');
    }

    if ($selectedMonth) {
        $query->whereMonth('date', $selectedMonth);
    }

    $events = $query->orderBy('date', 'asc')->paginate(24);

    return view('events.index', compact('events', 'search', 'selectedMonth'));
}


    public function show(Event $event)
    {

        $event->load('images');


        return view('events.detail', compact('event'));
    }
}
