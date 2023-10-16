<?php

namespace App\Http\Controllers;

use App\Models\Webprofile;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(Webprofile $about)
    {
        $about = Webprofile::first();

        return view('about', compact('about'));
    }
}