@php
if (strpos(URL::current(), 'create') == true) {
    $isCreate = true;
} else {
    $isCreate = false;
}
@endphp
<div class="card mt-4">
    <div class="card-body">
        <div class="hstack">
            <h4 class="card-title me-auto">{{ $judul }}</h4>
            {{-- bs5-button-a --}}
            <a @class(['btn btn-primary', 'd-none' => $isCreate]) href="{{ url('user/create') }}" >Buat</a>
        </div>
        <hr>
        {{ $slot }}
    </div>
</div>