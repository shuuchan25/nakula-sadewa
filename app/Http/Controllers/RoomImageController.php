<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomImageController extends Controller
{
    public function destroy($slug, $id)
    {
        $hotel = Hotel::where('slug', $slug)->first();
        
        $image = RoomImage::findOrFail($id);
        $hotelRoom = $image->hotelRoom;

        Storage::disk('public')->delete($image->image);
        $image->delete();

        return redirect('/admin/hotels/' . $hotel->slug . '/rooms/' . $hotelRoom->slug . '/edit')->with('success', 'Gambar Penginapan berhasil dihapus');
    }
}
