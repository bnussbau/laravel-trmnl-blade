<?php

use Bnussbau\TrmnlBlade\View\Components\Text;
use Illuminate\View\ComponentAttributeBag;

it('renders text component with default class', function () {
    $text = new Text;
    $rendered = $text->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<p class="text--left">');
    expect($html)->toContain('Test content');
});

it('renders text component with custom alignment', function () {
    $text = new Text;
    $rendered = $text->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'alignment' => 'center',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<p class="text--center">');
    expect($html)->toContain('Test content');
});

it('renders text component with shading', function () {
    $text = new Text;
    $rendered = $text->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'shading' => 'gray-1',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<p class="text--left text--gray-1">');
    expect($html)->toContain('Test content');
});

it('renders text component with both custom alignment and shading', function () {
    $text = new Text;
    $rendered = $text->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'alignment' => 'right',
        'shading' => 'gray-5',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<p class="text--right text--gray-5">');
    expect($html)->toContain('Test content');
});
