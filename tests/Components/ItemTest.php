<?php

use Bnussbau\TrmnlBlade\View\Components\Item;
use Illuminate\View\ComponentAttributeBag;

it('renders item component with default class', function () {
    $item = new Item;
    $rendered = $item->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="item">');
    expect($html)->toContain('Test content');
});
