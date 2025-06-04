<?php

namespace Bnussbau\TrmnlBlade\View\Components;

use Illuminate\View\Component;

class Markdown extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('trmnl::components.markdown');
    }
}
