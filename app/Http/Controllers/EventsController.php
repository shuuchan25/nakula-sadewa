<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

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

        return view('admin.events.index', compact('events', 'search'));
    }

    public function show(Event $event)
    {
        return view('admin.events.detail', compact('event'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:events',
            'date' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
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

        return redirect('/admin/events')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        // Validasi data dari form
        $rules = [
            'title' => 'required|max:255',
            'date' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'image' => 'nullable|image|max:5120|mimes:jpeg,png,jpg,gif',
        ];

        if( $request->slug != $event->slug ) {
            $rules['slug'] = 'required|unique:articles';
        }

        $validatedData = $request->validate($rules);

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

        return redirect('/admin/events')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($event->image);

        // Hapus data dari basis data
        $event->delete();

        return redirect('/admin/events')->with('success', 'Artikel berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}