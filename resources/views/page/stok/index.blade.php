@extends('layouts.admin')
@section('konten')
    <x-card judul="Data Barang">
        <x-slot name='tombol'>
            <x-link :url="url('/stok/create')">
                <i class="bi-pen"></i> Input
            </x-link>
        </x-slot>
        <table class="table">
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>Kode SKU</td>
                <td>harga</td>
                <td>Supplier</td>
                <td>Qty</td>
                <td>Jml Masuk</td>
                <td>Tgl Masuk</td>
                <td>Ket Masuk</td>
                <td>Jml Keluar</td>
                <td>Tgl Keluar</td>
                <td>Ket Keluar</td>
            </tr>
        </table>
    </x-card>
@endsection