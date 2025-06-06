<?php

use Bnussbau\TrmnlBlade\View\Components\Value;
use Illuminate\View\ComponentAttributeBag;

it('renders value component with default class', function () {
    $value = new Value;
    $rendered = $value->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<span class="value">');
    expect($html)->toContain('Test content');
});
