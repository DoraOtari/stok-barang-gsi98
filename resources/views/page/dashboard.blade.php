@push('css')
    <style>
        .dashboard-item{
            height: 200px;
            width: 200px;
            border-radius: 15px
        }
    </style>
@endpush
@extends('layouts.admin')
@section('konten')
    <div class="d-flex justify-content-evenly mt-2">
        <div class="dashboard-item bg-gradient text-bg-primary"></div>
        <div class="dashboard-item bg-gradient text-bg-info"></div>
        <div class="dashboard-item bg-gradient text-bg-success"></div>
    </div>
@endsection