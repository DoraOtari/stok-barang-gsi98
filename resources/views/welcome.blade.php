@extends('layouts.template')
@push('style')
    <style>
        #bungkus {
            background-image: url('background.jpg');
            background-size: cover;
        }
    </style>
@endpush
@section('konten')
    <section id="bungkus" class="vh-100">
        <div class="d-grid col-md-8 mx-auto">
            {{-- kartu --}}
            <div style="height: 50px">
                @if (session('pesan'))
                        <x-notif :pesan="session('pesan')" :warna="session('warna')" />
                @endif
            </div>
            <div class="card  shadow mt-md-4">
                <div class="card-body">
                    <h3 class="card-title my-0 fw-bold">Sign In</h3>
                    <small class="card-subtitle text-muted">Silahkan login menggunakan username dan password anda</small>
                    <div class="row w-100 justify-content-around mt-4">
                        {{-- kolom 1 --}}
                        <div class="col-md-5">
                            <img src="{{ asset('gambar_login.png') }}">
                        </div>
                        {{-- kolom 2 --}}
                        <div class="col-md-5">
                            {{-- form login --}}
                            <form action="/otentikasi" method="post">
                                @csrf
                                <x-input tipe="text" label="username" />
                                @error('username')
                                    <small>{{ $message }}</small>
                                @enderror
                                <x-input tipe="password" label="password" />
                                <x-button warna="success" label="Sign In" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection