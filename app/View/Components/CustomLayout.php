<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomLayout extends Component
{
    public $cartCount;

    public function __construct($cartCount)
    {
        $this->cartCount = $cartCount;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.custom');
    }
}
