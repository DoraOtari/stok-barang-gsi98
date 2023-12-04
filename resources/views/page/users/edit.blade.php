@extends('layouts.admin')
@section('konten')
    @if (session('pesan'))
        <x-notif :warna="session('warna')" :pesan="session('pesan')" />
    @endif
    <x-card judul="Edit Pengguna">
        <form action="{{ url('/user', $user->id) }}" method="post">
            @csrf
            @method('put')
            <x-input label="username" tipe="text" :datax="$user->username" />
            <x-input label="password lama" tipe="password" />
            <x-input label="password baru" tipe="password" />
            <x-button warna="primary" label="Update" />
        </form>
    </x-card>
@endsection