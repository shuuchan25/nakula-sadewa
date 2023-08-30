<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin/faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        // Simpan data baru ke basis data
        $faq = new Faq();
        $faq->question = $validatedData['question'];
        $faq->answer = $validatedData['answer'];
        $faq->content = $validatedData['content'];

        $faq->save();

        return redirect()->route('faq.index')->with('success', 'Faq created successfully!');
    }

    public function edit(Faq $faq)
    {
        // $faqs = Faq::all();
        return view('admin/edit-faq', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        // Update data di basis data
        $faq->question = $validatedData['question'];
        $faq->answer = $validatedData['answer'];

        $faq->save();

        return redirect()->route('faq.index')->with('success', 'Faq updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        // Hapus gambar dari penyimpanan
        Storage::disk('public')->delete($faq->image);

        // Hapus data dari basis data
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully!');
    }
}
