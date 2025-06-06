<?php

use Bnussbau\TrmnlBlade\View\Components\Table;
use Illuminate\View\ComponentAttributeBag;

it('renders table component with default class', function () {
    $table = new Table;
    $rendered = $table->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<table class="table ">');
    expect($html)->toContain('Test content');
});

it('renders table component with size class', function () {
    $table = new Table;
    $rendered = $table->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'size' => 'condensed'
        ])
    ])->render();

    expect($html)->toContain('<table class="table table--condensed">');
    expect($html)->toContain('Test content');
});
