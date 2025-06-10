<?php

use Bnussbau\TrmnlBlade\View\Components\Column;
use Bnussbau\TrmnlBlade\View\Components\Columns;
use Illuminate\View\ComponentAttributeBag;

it('renders columns component with default class', function () {
    $columns = new Columns;
    $rendered = $columns->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="columns">');
    expect($html)->toContain('Test content');
});

it('renders column component with default class', function () {
    $column = new Column;
    $rendered = $column->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="column">');
    expect($html)->toContain('Test content');
});
