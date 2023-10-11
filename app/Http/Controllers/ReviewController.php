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

        $reviews = $query->paginate(10);

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

        $review->save();

        return redirect('/')->with('success', 'Review berhasil dikirim!');
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        // dd($review->id);
        $review->is_shown = $request->input('is_shown');
        $review->save();

        return redirect('/admin/reviews');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('/admin/reviews')->with('success', 'Item berhasil dihapus!');
    }
}
