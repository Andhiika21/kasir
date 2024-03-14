<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index',['users'=>$users]);
    }

    public function create()
    {
        $users = User::all();
        return view('user.create',['users'=>$users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'role' => 'required|in:' . implode(',',User::$roleuser),
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function show(User $user)
    {
        
    }

    public function edit(User $user)
    {
        $users = User::all();
        return view('user.edit',['Users' => $users]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|unique:user,username|max:255',
            'role' => 'required|in:' . implode(',',User::$roleuser),
            'email' => 'required|email|unique:user,email|max:255'.$user->id,
            'password' => 'nullable|min:8',
        ]);

        $password = $request->has('password') ? bcrypt($request->password) : $user->password;

        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('user.index')
            ->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy(User $user)
    { 
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }

}

