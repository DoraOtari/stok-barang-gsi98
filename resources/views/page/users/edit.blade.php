@extends('layouts.admin')
@section('konten')
    @if (session('pesan'))
        <x-notif :warna="session('warna')" :pesan="session('pesan')" />
    @endif
    <x-card judul="Edit Pengguna">
        <form action="{{ url('/user') }}" method="post">
            @csrf
            <x-input label="username" tipe="text" :datax="$user->username" />
            <x-input label="password lama" tipe="password" />
            <x-input label="password baru" tipe="password" />
            {{-- <x-select label="role" :pilihan="['admin','staff']" /> --}}
            <x-button warna="success" label="Tambah" />
        </form>
    </x-card>
@endsection