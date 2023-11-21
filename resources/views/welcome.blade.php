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
        <div class="d-grid align-items-center h-100">
            {{-- kartu --}}
            <div class="card col-md-8 mx-auto shadow">
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