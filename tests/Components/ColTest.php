<?php

use Bnussbau\TrmnlBlade\View\Components\Col;
use Illuminate\View\ComponentAttributeBag;

it('renders grid component with default class', function () {
    $grid = new Col;
    $rendered = $grid->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="col">');
    expect($html)->toContain('Test content');
});

it('renders grid component with span prop', function () {
    $grid = new Col;
    $rendered = $grid->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
        'span' => 2,
    ])->render();

    expect($html)->toContain('<div class="col col--span-2">');
    expect($html)->toContain('Test content');
});

it('renders grid component with position prop', function () {
    $grid = new Col;
    $rendered = $grid->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
        'position' => 'center',
    ])->render();

    expect($html)->toContain('<div class="col col--center">');
    expect($html)->toContain('Test content');
});
