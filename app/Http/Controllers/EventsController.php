<?php

namespace App\Http\Controllers;

use App\Models\EventImage;
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
        $event->load('images');

        $other_images = $event->images;

        return view('admin.events.detail', compact('event', 'other_images'));
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
            'contact' => 'required|max:255',
            'price' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'map' => 'required',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif',
            'other_image.*' => 'nullable|image|file|max:10240|mimes:jpeg,png,jpg,gif',
            'other_image' => 'max:6',
        ]);

        // Simpan data baru ke basis data
        $event = new Event();
        $event->title = $validatedData['title'];
        $event->date = $validatedData['date'];
        $event->place = $validatedData['place'];
        $event->desc = $validatedData['desc'];
        $event->price = $validatedData['price'];
        $event->contact = $validatedData['contact'];
        $event->map = $validatedData['map'];

        $imagePath = $request->file('image')->store('images/events', 'public');
        $event->image = $imagePath;

        $event->save();

        if ($request->hasFile('other_image')) {
            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/hotels', 'public');
                    $eventImage = new EventImage(['other_image' => $imagePath]);
                    $event->images()->save($eventImage);
                }
            }
        }

        return redirect('/admin/events')->with('success', 'Data event berhasil dibuat!');
    }

    public function edit(Event $event)
    {
        $other_images = $event->images;

        return view('admin.events.edit', compact('event', 'other_images'));
    }

    public function update(Request $request, Event $event)
    {
        // Validasi data dari form
        $rules = [
            'title' => 'required|max:255',
            'date' => 'required|max:255',
            'contact' => 'required|max:255',
            'price' => 'required|max:255',
            'place' => 'required|max:255',
            'desc' => 'required',
            'map' => 'required',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
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
        $event->price = $validatedData['price'];
        $event->contact = $validatedData['contact'];
        $event->map = $validatedData['map'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($event->image);
            $imagePath = $request->file('image')->store('images/events', 'public');
            $event->image = $imagePath;
        }

        $event->save();

        return redirect('/admin/events')->with('success', 'Data event berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($event->image);

        foreach($event->images as $image) {
            Storage::disk('public')->delete($image->other_image);
            $image->delete();
        }

        // Hapus data dari basis data
        $event->delete();

        return redirect('/admin/events')->with('success', 'Data event berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}