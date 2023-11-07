@extends('layouts.admin')
@section('konten')
    <x-card judul="Data User">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-card>
@endsection