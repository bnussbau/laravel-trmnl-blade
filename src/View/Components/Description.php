<?php

namespace Bnussbau\TrmnlBlade\View\Components;

use Illuminate\View\Component;

class Description extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('trmnl::components.description');
    }
}
