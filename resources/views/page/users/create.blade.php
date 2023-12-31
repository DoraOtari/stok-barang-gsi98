@extends('layouts.admin')
@section('konten')
    @if (session('pesan'))
        <x-notif :warna="session('warna')" :pesan="session('pesan')" />
    @endif
    <x-card judul="Tambah Pengguna">
        <form action="{{ url('/user') }}" method="post">
            @csrf
            <x-input label="username" tipe="text" />
            <x-input label="password" tipe="password" />
            <x-select label="role" :pilihan="['admin','staff']" />
            <x-button warna="success" label="Tambah" />
        </form>
    </x-card>
@endsection