<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Faq::query();

        if ($search) {
            $query->where('question', 'LIKE', '%' . $search . '%');
                // ->orWhere('author', 'LIKE', '%' . $search . '%');
        }

        $faqs = $query->paginate(10); // Sesuaikan dengan jumlah yang Anda inginkan

        return view('admin.faqs.index', compact('faqs', 'search'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'question' => 'required',
            'slug' => 'required|unique:faqs',
            'answer' => 'required',
        ]);

        // Simpan data baru ke basis data
        $faq = new Faq();
        $faq->question = $validatedData['question'];
        $faq->answer = $validatedData['answer'];

        $faq->save();

        return redirect('/admin/faqs')->with('success', 'Data FAQ baru berhasil dibuat.');
    }

    public function edit(Faq $faq)
    {
        // $faqs = Faq::all();
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // Validasi data dari form
        $rules = [
            'question' => 'required',
            'answer' => 'required',
        ];

        if( $request->slug != $faq->slug ) {
            $rules['slug'] = 'required|unique:articles';
        }

        $validatedData = $request->validate($rules);

        // Update data di basis data
        $faq->question = $validatedData['question'];
        $faq->answer = $validatedData['answer'];

        $faq->save();

        return redirect('/admin/faqs')->with('success', 'Data FAQ berhasil diperbarui.');
    }

    public function destroy(Faq $faq)
    {

        // Hapus data dari basis data
        $faq->delete();

        return redirect('/admin/faqs')->with('success', 'Data FAQ berhasil dihapus.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Faq::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}