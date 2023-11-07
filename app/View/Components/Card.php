<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $judul;
    public function __construct($judul)
    {
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
