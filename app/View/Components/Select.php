<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $label, $pilihan;
    public function __construct($label, $pilihan)
    {
        $this->label = $label;
        $this->pilihan = $pilihan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
