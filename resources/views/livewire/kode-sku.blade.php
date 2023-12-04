<div class="row mb-3">
    <label class="form-label">Kode SKU</label>
   <div class="col-10">
     <input type="text" class="form-control col-10" name="kode_sku" placeholder="klik tombol generate" value="{{ $kode }}">
   </div>
   <button type="button" class="btn btn-primary col-2" wire:click="generate">Generate</button>
</div>
