<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KodeSku extends Component
{
    public $kode = null;

    public function generate()
    {
        $this->kode = uniqid();
    }
    public function render()
    {
        return view('livewire.kode-sku');
    }
}
