@extends('layouts.admin')
@section('konten')
    <x-card judul="Input Barang Masuk">
        <form action="{{ url('stok') }}" method="post">
            @csrf
            <x-button tipe="button" warna="primary" label="generate kode" />
            <x-input label="kode sku" tipe="text" />
            <x-input label="nama" tipe="text" />
            <x-input label="harga" tipe="number" />
            <x-input label="qty" tipe="number" />
            <x-input label="nama supplier" tipe="text" />
            <x-input label="tgl masuk" tipe="date" />
            <x-input label="keterangan" tipe="text" />
            <x-button tipe="submit" warna="dark" label="Tambah" />
        </form>
    </x-card>
@endsection