<?php

use Bnussbau\TrmnlBlade\View\Components\Screen;

it('renders screen component with default noBleed value', function () {
    $screen = new Screen;
    $rendered = $screen->render();
    $html = $rendered->with('slot', 'Test content')->render();

    expect($html)->toContain('<div class="screen ">');
    expect($html)->toContain('Test content');
});

it('renders screen component with noBleed set to true', function () {
    $screen = new Screen;
    $rendered = $screen->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'noBleed' => true,
    ])->render();

    expect($html)->toContain('<div class="screen screen--no-bleed">');
    expect($html)->toContain('Test content');
});

it('renders screen component with noBleed set to false', function () {
    $screen = new Screen;
    $rendered = $screen->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'noBleed' => false,
    ])->render();

    expect($html)->toContain('<div class="screen ">');
    expect($html)->toContain('Test content');
});
