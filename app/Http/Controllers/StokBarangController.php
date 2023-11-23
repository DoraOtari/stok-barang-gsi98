<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{

    public function index()
    {
        return view('page.stok.index');
    }

    public function create()
    {
        return view('page.stok.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(StokBarang $stokBarang)
    {
        //
    }
    public function edit(StokBarang $stokBarang)
    {
        //
    }

    public function update(Request $request, StokBarang $stokBarang)
    {
        //
    }

    public function destroy(StokBarang $stokBarang)
    {
        //
    }
}
