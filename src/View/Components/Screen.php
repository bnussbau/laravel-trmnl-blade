<?php

namespace Bnussbau\TrmnlBlade\View\Components;

use Illuminate\View\Component;

class Screen extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('trmnl::components.screen');
    }
}
