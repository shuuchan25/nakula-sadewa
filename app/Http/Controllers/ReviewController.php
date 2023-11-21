<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Review::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('review', 'LIKE', '%' . $search . '%');
        }

        $reviews = $query->paginate(12);

        return view('admin.reviews', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'review' => 'required|max:255'
        ]);

        $review = new Review();
        $review->name = $validatedData['name'];
        $review->review = $validatedData['review'];
        $review->is_shown = 0;

        $review->save();

        return redirect('/')->with('success', 'Review berhasil dikirim!');
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        // dd($review->id);
        $review->is_shown = $request->has('is_shown');
        $review->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('/admin/reviews')->with('success', 'Item berhasil dihapus!');
    }
}