<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public int $val = 4;

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('mindaweb::layout');
    }
}
