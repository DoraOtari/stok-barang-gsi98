@extends('layouts.admin')
@section('konten')
    @if (session('pesan'))
        <x-notif :pesan="session('pesan')" :warna="session('warna')" />
    @endif
    <x-card judul="Data User">
        <x-slot name="tombol">
            <x-link :url="url('user/create')">
                <i class="bi-plus"></i> Buat
            </x-link>
        </x-slot>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <x-link :url="url('user/'.$user->id.'/edit')" >
                                    <i class="bi-pen"></i>
                                </x-link>
                            </td>
                            <td>
                                <form action="{{ url('user',$user->id)  }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-card>
@endsection