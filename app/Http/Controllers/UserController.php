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
        $currentUser = auth()->user();

        // Check if the current user is a superadmin
        if ($currentUser->role->name === 'Superadmin') {
            // Superadmin can retrieve all users
            $users = User::query()
                ->when($request->input('search'), function ($query, $search) {
                    return $query->where('name', 'LIKE', '%' . $search . '%');
                })
                ->when($request->input('role_id'), function ($query, $role_id) {
                    return $query->where('role_id', $role_id);
                })
                ->paginate(10);
        } else {
            // Non-superadmin users can only retrieve their own data
            $users = User::where('id', $currentUser->id)->paginate(10);
        }


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

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect('/admin/users')->with('success', 'Data user baru berhasil dibuat.');
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
            'role_id' => 'nullable',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif',
        ];

        if ($request->has('username') && $request->username != $user->username) {
            $rules['username'] = 'required|max:255|unique:users';
        }

        if ($request->has('email') && $request->email != $user->email) {
            $rules['email'] = 'required|email:dns|max:255|unique:users';
        }

        if ($request->filled('password') && $request->password != $user->password) {
            $rules['password'] = 'required|min:5|max:255';
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            // Cek apakah ada gambar lama
            if ($user->image) {
                // Hapus gambar lama jika ada
                Storage::disk('public')->delete($user->image);
            }
        
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
        

        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }
    

        $user->update($validatedData);

        return redirect('/admin/users')->with('success', 'Data user berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Storage::disk('public')->delete($user->image);

        // Hapus data dari basis data
        $user->delete();

        return redirect('/admin/users')->with('success', 'Data user berhasil dihapus.');
    }
}