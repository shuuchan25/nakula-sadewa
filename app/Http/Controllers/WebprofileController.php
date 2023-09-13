<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebprofileRequest;
use App\Models\Webprofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebprofileController extends Controller
{
    function index()
    {
        $datas = Webprofile::first();
        return view('admin.webprofile', compact('datas'));
    }


    function update(WebprofileRequest $request)
    {
    $validate = $request->validated();

    $data = Webprofile::first();

    if ($request->hasFile('image')) {
        // Hapus gambar lama dari storage jika ada
        if ($data->image) {
            Storage::delete($data->image);
        }

        // Simpan gambar baru di storage/webprofile
        $imagePath = $request->file('image')->store('images/webprofile', 'public');

        // Set path gambar baru ke model
        $validate['image'] = $imagePath;
    } else {
        // Jika tidak ada gambar yang diunggah, hapus 'image' dari $validate
        unset($validate['image']);
    }

    if ($data->update($validate)) {
        return redirect('/admin/webprofile')->with('success', 'Profil website berhasil diperbarui!');
    } else {
        return redirect()->back()->withErrors(['error' => 'Data failed update']);
    }

}

}