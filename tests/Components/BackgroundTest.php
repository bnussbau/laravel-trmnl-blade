<?php

use Bnussbau\TrmnlBlade\View\Components\Background;
use Illuminate\View\ComponentAttributeBag;

it('renders background component with default class', function () {
    $background = new Background;
    $rendered = $background->render();
    $html = $rendered->with([
        'slot' => 'Black',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="bg-black">');
    expect($html)->toContain('Black');
});

it('renders background component with color gray-1 ', function () {
    $background = new Background;
    $rendered = $background->render();
    $html = $rendered->with([
        'slot' => 'Gray',
        'attributes' => new ComponentAttributeBag(['color' => 'gray-1'])
    ])->render();

    expect($html)->toContain('<div class="bg-gray-1">');
    expect($html)->toContain('Gray');
});

it('renders background component with color white', function () {
    $background = new Background;
    $rendered = $background->render();
    $html = $rendered->with([
        'slot' => 'White',
        'attributes' => new ComponentAttributeBag(['color' => 'white'])
    ])->render();

    expect($html)->toContain('<div class="bg-white">');
    expect($html)->toContain('White');
});
