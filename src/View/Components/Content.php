<?php

namespace Bnussbau\TrmnlBlade\View\Components;

use Illuminate\View\Component;

class Content extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('trmnl::components.content');
    }
}
