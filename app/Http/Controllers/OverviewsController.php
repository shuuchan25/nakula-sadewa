<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class OverviewsController extends Controller
{
    public function index() {
        $user = auth()->user();

        $role = Role::find($user->role_id);

        return view('admin.overviews', compact('user', 'role'));
    }
}