<?php

use Bnussbau\TrmnlBlade\View\Components\Description;
use Illuminate\View\ComponentAttributeBag;

it('renders description component with default class', function () {
    $description = new Description;
    $rendered = $description->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<span class="description">');
    expect($html)->toContain('Test content');
});

it('renders description component with data attributes', function () {
    $description = new Description;
    $rendered = $description->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'data-pixel-perfect' => 'true',
            'class' => 'm--1'
        ])
    ])->render();

    expect($html)->toContain('<span class="description m--1" data-pixel-perfect="true">');
    expect($html)->toContain('Test content');
});
