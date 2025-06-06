<?php

use Bnussbau\TrmnlBlade\View\Components\Grid;
use Illuminate\View\ComponentAttributeBag;

it('renders grid component with default class', function () {
    $grid = new Grid;
    $rendered = $grid->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="grid">');
    expect($html)->toContain('Test content');
});

it('renders grid component with cols prop', function () {
    $grid = new Grid;
    $rendered = $grid->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
        'cols' => 4,
    ])->render();

    expect($html)->toContain('<div class="grid grid--cols-4">');
    expect($html)->toContain('Test content');
});
