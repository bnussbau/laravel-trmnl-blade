<?php

use Bnussbau\TrmnlBlade\View\Components\Clamp;
use Illuminate\View\ComponentAttributeBag;

it('renders clamp component with default class', function () {
    $clamp = new Clamp;
    $rendered = $clamp->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<span class="description clamp--1">');
    expect($html)->toContain('Test content');
});

it('renders clamp component with three lines', function () {
    $clamp = new Clamp;
    $rendered = $clamp->render();
    $html = $rendered->with([
        'slot' => 'This text is clamped to three lines. It will show up to three lines of text before truncating with an ellipsis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'attributes' => new ComponentAttributeBag(['lines' => '3']),
    ])->render();

    expect($html)->toContain('<span class="description clamp--3">');
    expect($html)->toContain('This text is clamped to three lines. It will show up to three lines of text before truncating with an ellipsis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
});

it('renders clamp component with no clamping', function () {
    $clamp = new Clamp;
    $rendered = $clamp->render();
    $html = $rendered->with([
        'slot' => 'This text has all clamping removed. It will display naturally without any truncation or ellipsis, regardless of length.',
        'attributes' => new ComponentAttributeBag(['lines' => 'none']),
    ])->render();

    expect($html)->toContain('<span class="description clamp--none">');
    expect($html)->toContain('This text has all clamping removed. It will display naturally without any truncation or ellipsis, regardless of length.');
});
