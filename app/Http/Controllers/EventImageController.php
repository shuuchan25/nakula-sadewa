<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'other_image.*' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('other_image')) {
            // Count the existing images for the $event
            $existingImagesCount = $event->images()->count();
            // Define the maximum allowed images (in this case, 6)
            $maxImages = 6;

            if ($existingImagesCount + count($request->file('other_image')) > $maxImages) {
                return redirect('/admin/events/' . $event->slug . '/edit')->with('error', 'Maksimal upload adalah ' . $maxImages . ' gambar');
            }

            foreach ($request->file('other_image') as $otherImageFile) {
                if ($otherImageFile->isValid()) {
                    $imagePath = $otherImageFile->store('images/events', 'public');
                    $eventImage = new EventImage(['other_image' => $imagePath]);
                    $event->images()->save($eventImage);
                }
            }
        }

        return redirect('/admin/events/' . $event->slug . '/edit')->with('success', 'Gambar event berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $other_image = EventImage::findOrFail($id);
        $event = $other_image->event;

        Storage::disk('public')->delete($other_image->other_image);
        $other_image->delete();

        return redirect('/admin/events/' . $event->slug . '/edit')->with('success', 'Gambar event berhasil dihapus.');
    }
}