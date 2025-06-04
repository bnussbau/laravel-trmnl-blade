<?php

use Bnussbau\TrmnlBlade\View\Components\Layout;
use Bnussbau\TrmnlBlade\View\Components\TitleBar;
use Bnussbau\TrmnlBlade\View\Components\View;

it('can render the view component', function () {
    $view = new View;
    $rendered = $view->render();

    expect($rendered->getName())->toBe('trmnl::components.view');
});

it('can render the layout component', function () {
    $layout = new Layout;
    $rendered = $layout->render();

    expect($rendered->getName())->toBe('trmnl::components.layout');
});

it('can render the title bar component', function () {
    $titleBar = new TitleBar;
    $rendered = $titleBar->render();

    expect($rendered->getName())->toBe('trmnl::components.title-bar');
});
