@extends('layouts.admin')
@section('konten')
    <x-card judul="Input Barang Masuk">
        <form action="{{ url('stok') }}" method="post">
            @csrf
            <livewire:kode-sku />
            <x-input label="nama" tipe="text" />
            <x-input label="harga" tipe="number" />
            <x-input label="qty" tipe="number" />
            <x-input label="nama supplier" tipe="text" />
            <x-input label="tgl" tipe="date" />
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <select class="form-select" name="keterangan">
                    <option selected>Select one</option>
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
            </div>
            <x-button tipe="submit" warna="dark" label="Tambah" />
        </form>
    </x-card>
@endsection