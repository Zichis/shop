<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomLayout extends Component
{
    public $cartCount;
    public $searchWord;

    public function __construct($cartCount = 0, $searchWord = '')
    {
        $this->cartCount = $cartCount;
        $this->searchWord = $searchWord;
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
