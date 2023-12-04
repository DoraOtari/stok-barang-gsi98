@extends('layouts.admin')
@section('konten')
    <x-card judul="Transaksi Keluar">
        <form action="{{ route('transaksi keluar') }}" method="post">
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <select class="form-select" name="id_barang">
                    <option selected>--Pilih Satu--</option>
                    @foreach ($barang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4 vstack">
                <b>Sisa Stok</b>
                <b>0</b>
            </div>
            <div class="col-lg-4 vstack">
                <b>Supplier</b>
                <b>xxxx</b>
            </div>
            <div class="col-lg-4">
                <b>Harga</b>
                <b>0</b>
            </div>
        </form>
    </x-card>
@endsection