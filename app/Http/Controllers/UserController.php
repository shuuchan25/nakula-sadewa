<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $role_id = $request->input('role_id');
        $query = User::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        if ($role_id) {
            $query->where('role_id', $role_id);
        }

        $users = $query->paginate(10);

        $roles = Role::all();

        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'role_id' => 'required',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->role_id = $validatedData['role_id'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];

        $imagePath = $request->file('image')->store('images/users', 'public');
        $user->image = $imagePath;

        $user->save();

        return redirect('/admin/users')->with('success', 'User baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'role_id' => 'required',
            'password' => 'nullable|min:5|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
        ];

        if ($request->has('username') && $request->username != $user->username) {
            $rules['username'] = 'required|max:255|unique:users';
        }

        if ($request->has('email') && $request->email != $user->email) {
            $rules['email'] = 'required|email:dns|max:255|unique:users';
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($user->image);

            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }

        $user->update($validatedData);

        return redirect('/admin/users')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Storage::disk('public')->delete($user->image);

        // Hapus data dari basis data
        $user->delete();

        return redirect('/admin/users')->with('success', 'User berhasil dihapus!');
    }
}
