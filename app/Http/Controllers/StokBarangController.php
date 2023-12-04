<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{

    public function index()
    {
        return view('page.stok.index', [ 'stok' => StokBarang::all()]);
    }

    public function create()
    {
        return view('page.stok.create');
    }

    public function store(Request $request)
    {
        if ($request->keterangan === 'masuk') {
            $qty = 'qty_masuk';
            $tgl = 'tgl_masuk';
        } else {
            $qty = 'qty_keluar';
            $tgl = 'tgl_keluar';
        }

        StokBarang::create([
            'kode_sku' => $request->kode_sku,
            'nama' => $request->nama,
            'harga' => $request->harga,
            $qty => $request->qty,
            'nama_supplier' => $request->nama_supplier,
            $tgl => $request->tgl,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('stok')->with(
            'pesan', 'berhasil input barang'
        );
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
