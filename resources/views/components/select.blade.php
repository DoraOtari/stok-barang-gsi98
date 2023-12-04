{{-- bs5-form-select-custom --}}
<div class="mb-3">
    <label for="" class="form-label text-capitalize">{{ $label }}</label>
    <select class="form-select" name="{{ $label }}">
        <option value="null" disabled selected>--Pilih Satu--</option>
       
        @foreach ($pilihan as $item)
            <option value="{{ $item }}" class="text-capitalize">{{ $item }}</option>
        @endforeach
    </select>
</div>