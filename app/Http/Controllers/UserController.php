<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('page.users.index', ['users' => User::all()]);
    }

    public function create()
    {
        return view('page.users.create');
    }

    public function store(Request $request)
    {

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]); // perintah untuk memasukan data ke tabel user

        return redirect('/user/create')->with('pesan', "berhasil tambah user $request->username")
                                ->with('warna', 'success');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('page.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('pesan', 'Berhasil hapus user')
                                ->with('warna', 'danger');
    }
}
