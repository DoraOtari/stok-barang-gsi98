<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            'password' => $request->password,
            'role' => $request->role,
        ]); // perintah untuk memasukan data ke tabel user

        return redirect('/user/create')->with('pesan', "berhasil tambah user $request->username")
                                ->with('warna', 'success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
