<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Event::query();

        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
            // ->orWhere('date', 'LIKE', '%' . $search . '%');
        }

        $events = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin/event', compact('events', 'search'));
    }

    public function show(Event $event)
    {
        return view('admin.detail-event', compact('event'));
    }

    public function showBySlug($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('admin.detail-event', compact('event'));
    }

    public function create()
    {
        return view('admin/add-event');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data baru ke basis data
        $event = new Event();
        $event->title = $validatedData['title'];
        $event->date = $validatedData['date'];
        $event->place = $validatedData['place'];
        $event->desc = $validatedData['desc'];

        $imagePath = $request->file('image')->store('images/events', 'public');
        $event->image = $imagePath;

        $event->save();

        return redirect()
            ->route('event.index')
            ->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Event $event)
    {
        return view('admin/edit-event', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Update data di basis data
        $event->title = $validatedData['title'];
        $event->date = $validatedData['date'];
        $event->place = $validatedData['place'];
        $event->desc = $validatedData['desc'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($event->image);
            $imagePath = $request->file('image')->store('images/events', 'public');
            $event->image = $imagePath;
        }

        $event->save();

        return redirect()
            ->route('event.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($event->image);

        // Hapus data dari basis data
        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }
}