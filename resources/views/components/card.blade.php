<div class="card mt-4">
    <div class="card-body">
        <div class="hstack">
            <h4 class="card-title me-auto">{{ $judul }}</h4>
            {{ $tombol ?? null }}
        </div>
        <hr>
        {{ $slot }}
    </div>
</div>