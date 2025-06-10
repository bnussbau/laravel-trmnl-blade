<?php

use Bnussbau\TrmnlBlade\View\Components\Markdown;
use Illuminate\View\ComponentAttributeBag;

it('renders markdown component with default class', function () {
    $markdown = new Markdown;
    $rendered = $markdown->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="markdown ">');
    expect($html)->toContain('Test content');
});
