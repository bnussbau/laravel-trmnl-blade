<?php

use Bnussbau\TrmnlBlade\View\Components\View;

it('renders view component with correct HTML class', function () {
    $view = new View;
    $rendered = $view->render();
    $html = $rendered->with('slot', 'Test content')->render();

    expect($html)->toContain('<div class="view view--full">');
    expect($html)->toContain('Test content');
});

it('renders view component with half_horizontal size', function () {
    $view = new View;
    $rendered = $view->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'size' => 'half_horizontal',
    ])->render();

    expect($html)->toContain('<div class="view view--half_horizontal">');
    expect($html)->toContain('Test content');
});

it('renders view component with half_vertical size', function () {
    $view = new View;
    $rendered = $view->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'size' => 'half_vertical',
    ])->render();

    expect($html)->toContain('<div class="view view--half_vertical">');
    expect($html)->toContain('Test content');
});

it('renders view component with quadrant size', function () {
    $view = new View;
    $rendered = $view->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'size' => 'quadrant',
    ])->render();

    expect($html)->toContain('<div class="view view--quadrant">');
    expect($html)->toContain('Test content');
});
