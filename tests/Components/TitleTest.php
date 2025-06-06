<?php

use Bnussbau\TrmnlBlade\View\Components\Title;
use Illuminate\View\ComponentAttributeBag;

it('renders title component with default class', function () {
    $title = new Title;
    $rendered = $title->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<span class="title ">');
    expect($html)->toContain('Test content');
});

it('renders title component with size small', function () {
    $title = new Title;
    $rendered = $title->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'size' => 'small',
        ]),
    ])->render();

    expect($html)->toContain('<span class="title  title--small ">');
    expect($html)->toContain('Test content');
});
