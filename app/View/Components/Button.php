<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $warna, $label;
    public function __construct($warna, $label)
    {
        $this->warna = $warna;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
