<?php

use Bnussbau\TrmnlBlade\View\Components\Mashup;
use Illuminate\View\ComponentAttributeBag;

it('renders mashup component with default class', function () {
    $mashup = new Mashup;
    $rendered = $mashup->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="mashup mashup--1Lx1R">');
    expect($html)->toContain('Test content');
});

it('renders mashup component with 1Tx1B class', function () {
    $mashup = new Mashup;
    $rendered = $mashup->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'mashupLayout' => '1Tx1B'
        ])
    ])->render();

    expect($html)->toContain('<div class="mashup mashup--1Tx1B">');
    expect($html)->toContain('Test content');
});
