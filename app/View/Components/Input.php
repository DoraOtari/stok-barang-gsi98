<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label, $tipe, $datax;

    public function __construct($label, $tipe, $datax = null)
    {
        $this->label = $label;
        $this->tipe  = $tipe;
        $this->datax  = $datax;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
