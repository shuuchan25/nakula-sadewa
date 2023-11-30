<?php

namespace App\Http\Controllers;

use App\Models\Leaflet;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class LeafletController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Leaflet::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $leaflets = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.leaflets.index', compact('leaflets', 'search'));
    }


    public function create()
    {
        return view('admin.leaflets.create');
    }


    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:leaflets',
            'link' => 'required',
        ]);

        // Simpan data baru ke basis data
        $leaflet = new Leaflet();
        $leaflet->name = $validatedData['name'];
        $leaflet->link = $validatedData['link'];
        $leaflet->slug = $validatedData['slug'];




        $leaflet->save();

        return redirect('/admin/leaflets')->with('success', 'Data leaflet baru berhasil dibuat.');
    }

    public function edit(Leaflet $leaflet)
    {
        return view('admin.leaflets.edit', compact('leaflet'));
    }

    public function update(Request $request, Leaflet $leaflet)
    {
        // Validasi data dari form
        $rules = [
            'name' => 'required|max:255',
            'link' => 'required|max:255',
        ];

        if( $request->slug != $leaflet->slug ) {
            $rules['slug'] = 'required|unique:leaflets';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $leaflet->name = $validatedData['name'];
        $leaflet->link = $validatedData['link'];

        $leaflet->save();

        return redirect('/admin/leaflets')->with('success', 'Data leaflet berhasil diperbarui.');
    }

    public function destroy(Leaflet $leaflet)
    {

        // Hapus data dari basis data
        $leaflet->delete();

        return redirect('/admin/leaflets')->with('success', 'Data leaflet berhasil dihapus.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Leaflet::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}