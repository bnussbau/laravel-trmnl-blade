<?php

use Bnussbau\TrmnlBlade\View\Components\Meta;
use Illuminate\View\ComponentAttributeBag;

it('renders meta component with default class', function () {
    $meta = new Meta;
    $rendered = $meta->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="meta">');
    expect($html)->toContain('Test content');
}); 