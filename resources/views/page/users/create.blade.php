@extends('layouts.admin')
@section('konten')
    @if (session('pesan'))
        <x-notif warna="primary" :pesan="session('pesan')" />
    @endif
    <x-card judul="Tambah Pengguna">
        <x-input label="username" tipe="text" />
        <x-input label="password" tipe="password" />
        <x-select label="role" :pilihan="['admin','staff']" />
        <x-button warna="success" label="Tambah" />
    </x-card>
@endsection