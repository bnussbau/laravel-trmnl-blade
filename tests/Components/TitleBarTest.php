<?php

use Bnussbau\TrmnlBlade\View\Components\TitleBar;
use Illuminate\View\ComponentAttributeBag;

it('renders title-bar component with default class', function () {
    $titleBar = new TitleBar;
    $rendered = $titleBar->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="title_bar">');
    // expect($html)->toContain('Test content');
});

test('title bar renders with default image', function () {
    $titleBar = new TitleBar;
    $rendered = $titleBar->render();
    $html = $rendered->with([
        'title' => 'Test Title',
    ])->render();

    expect($html)
        ->toContain('Test Title')
        ->toContain('<svg class="image"')
        ->not->toContain('inline');
});

test('title bar renders with inline image', function () {
    $titleBar = new TitleBar;
    $rendered = $titleBar->render();
    $html = $rendered->with([
        'image' => 'inline',
        'slot' => 'svg class',
    ])->render();

    expect($html)
        ->toContain('svg class');
});
