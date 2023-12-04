@extends('layouts.admin')
@section('konten')
    <x-card judul="Data Barang">
        <x-slot name='tombol'>
            <x-link :url="url('/stok/create')">
                <i class="bi-pen"></i> Input
            </x-link>
        </x-slot>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kode SKU</th>
                    <th>Supplier</th>
                    <th>harga</th>
                    <th>Jml Masuk</th>
                    <th>Tgl Masuk</th>
                    <th>Jml Keluar</th>
                    <th>Tgl Keluar</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($stok as $item)
                    <tr>
                       <td>{{ $loop->iteration }}</td> 
                       <td>{{ $item->nama }}</td>
                       <td>{{ $item->kode_sku }}</td>
                       <td>{{ $item->nama_supplier }}</td>
                       <td>Rp. {{ number_format($item->harga,0,',','.')  }}</td>
                       <td>{{ $item->qty_masuk ?? 0 }} Pcs</td>
                       <td>{{ $item->tgl_masuk != null ? date('d F Y', strtotime($item->tgl_masuk)) : '-' }}</td>
                       <td>{{ $item->qty_keluar ?? 0 }} Pcs</td>
                       <td>{{ $item->tgl_keluar != null ? date('d F Y', strtotime($item->tgl_keluar)) : '-' }}</td>
                       <td>
                            <span class="badge bg-primary">
                                {{ $item->keterangan }}
                            </span> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
@endsection