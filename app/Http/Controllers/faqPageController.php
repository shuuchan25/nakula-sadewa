<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class faqPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Faq::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('question', 'LIKE', '%' . $search . '%');
            });
        }
        $faqs = $query->orderBy('created_at', 'desc')->paginate(24);

        return view('/faq', compact('faqs', 'search'));
    }
}