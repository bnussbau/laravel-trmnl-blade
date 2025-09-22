<?php

namespace Bnussbau\TrmnlBlade\View\Components;

use Illuminate\View\Component;

/**
 * @deprecated since 2.0.0 Use Bnussbau\\TrmnlBlade\\View\\Components\\RichText instead.
 */
class Markdown extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('trmnl::components.markdown');
    }
}
