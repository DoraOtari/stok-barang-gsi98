<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notif extends Component
{
    public $warna, $pesan;
    public function __construct($warna, $pesan)
    {
        $this->warna = $warna;
        $this->pesan = $pesan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notif');
    }
}
